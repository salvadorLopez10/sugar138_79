/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */
/**
 * Application logger.
 *
 * ```
 * // Log a string message
 * SUGAR.App.logger.debug("Some debug message");
 *
 * // Log an object
 * var obj = { foo: "bar" };
 * SUGAR.App.logger.info(obj);
 *
 * // Log a closure.
 * var a = 1;
 * SUGAR.App.logger.error(function() { return a; });
 * ```
 *
 * @class Utils.Logger
 * @alias SUGAR.App.logger
 * @singleton
 */
(function(app) {

    app.augment('logger', {

        /**
         * Logging levels.
         *
         * @class Utils.Logger.levels
         * @singleton
         */
        levels: {
            /**
             * Trace log level
             * @property {Utils.Logger.levels}
             */
            TRACE: {
                value: 1,
                name: 'TRACE'
            },
            /**
             * Debug log level
             * @property {Utils.Logger.levels}
             */
            DEBUG: {
                value: 2,
                name: 'DEBUG'
            },
            /**
             * Info log level
             * @property {Utils.Logger.levels}
             */
            INFO: {
                value: 3,
                name: 'INFO'
            },
            /**
             * Warn log level
             * @property {Utils.Logger.levels}
             */
            WARN: {
                value: 4,
                name: 'WARN'
            },
            /**
             * Error log level
             * @property {Utils.Logger.levels}
             */
            ERROR: {
                value: 5,
                name: 'ERROR'
            },
            /**
             * Fatal log level
             * @property {Utils.Logger.levels}
             */
            FATAL: {
                value: 6,
                name: 'FATAL'
            }
        },

        /**
         * Turns on the warnings regarding usage of jQuery deprecated methods.
         */
        init: function() {
            // TODO this will be removed by SC-5256.
            if (!window.jQuery) {
                return;
            }
            app.on('app:sync:complete', function() {
                jQuery.migrateMute = this.getLevel().value > this.levels.WARN.value;
            }, this);
        },

        /**
         * Outputs messages onto browser's console object.
         *
         * @class Utils.Logger.ConsoleWriter
         * @member Utils.Logger
         * @singleton
         */
        ConsoleWriter: {
            /**
             * Outputs a message with the specified log level onto the browser's console.
             * The writer uses:
             *
             *  - `console.info`: `TRACE`, `DEBUG` and `INFO`.
             *  - `console.warn`: `WARN`.
             *  - `console.error`: `ERROR` and `FATAL`.
             *
             * @param {Utils.Logger.levels} level A logger level from logger.levels
             * @param {String} message
             * @method
             */
            write: function(level, message) {
                // work around for browsers without console
                if (!window.console) window.console = {};
                if (!window.console.log) window.console.log = function() { };
                if (level.value <= app.logger.levels.INFO.value) {
                    console.log(message);
                }
                else if (level.value == app.logger.levels.WARN.value) {
                    console.warn(message);
                }
                else {
                    console.error(message);
                }
            }
        },

        /**
         * Writes log messages onto server.
         *
         * @class Utils.Logger.ServerWriter
         * @member Utils.Logger
         * @singleton
         */
        ServerWriter: {
            /**
             * Writes a log message with a given {@link Utils.Logger.levels}
             * level onto the server.
             *
             * @param {Utils.Logger.levels} level Logger level.
             * @param {String} message Log message.
             * @throws {String} Exceptions are thrown whether the returned
             *    status is `false` or an error occurred while processing the request.
             */
            write: function(level, message) {
                // FIXME: add support for other logger levels (SC-5483).
                if (level.value < app.logger.levels.WARN.value) {
                    return;
                }

                if (!app.api.isAuthenticated()) {
                    return;
                }

                var write = app.config.logger && app.config.logger.writeToServer || false;
                if (!write || !message.trim().length) {
                    return;
                }

                var url = app.api.buildURL(undefined, 'logger');
                var params = {
                    level: level.name.toLowerCase(),
                    message: message
                };

                app.api.call('create', url, params, {
                    success: function(data) {
                        if (!data.status) {
                            throw 'Failed to write log message {' + message + '} onto server';
                        }
                    },
                    error: function(e) {
                        throw e;
                    }
                });
            }
        },

        /**
         * Formats a log message as a string with log level and UTC timestamp.
         * <pre><code>
         * // Log a trace message
         * SUGAR.App.logger.trace("Blah-blah");
         *
         * // Output
         * // TRACE[2012-1-26 2:38:23]: Blah-blah
         * </code></pre>
         *
         * @class Utils.Logger.SimpleFormatter
         * @member Utils.Logger
         * @singleton
         */
        SimpleFormatter: {
            /**
             * Formats a log message by adding log level name and UTC timestamp.
             * @param {Object} level logging level
             * @param {String} message log message
             * @param {Date} date logging timestamp
             * @return {String} formatted log message
             * @method
             */
            format: function(level, message, date) {
                var dateString = date.getUTCFullYear() + '-' + (date.getUTCMonth() + 1) + '-' + date.getUTCDate() +
                    ' ' + date.getUTCHours() + ':' + date.getUTCMinutes() + ':' + date.getUTCSeconds();
                return level.name + '[' + dateString + ']: ' + message;
            }
        },

        /**
         * Logs a message with a TRACE log level.
         * @param {string|Object|Function} message log message
         * @member Utils.Logger
         */
        trace: function(message) {
            this.log(this.levels.TRACE, message);
        },

        /**
         * Logs a message with DEBUG log level.
         * @param {string|Object|Function} message log message
         * @member Utils.Logger
         */
        debug: function(message) {
            this.log(this.levels.DEBUG, message);
        },

        /**
         * Logs a message with INFO log level.
         * @param {string|Object|Function} message log message
         * @member Utils.Logger
         */
        info: function(message) {
            this.log(this.levels.INFO, message);
        },

        /**
         * Logs a message with WARN log level.
         * @param {string|Object|Function} message log message
         * @member Utils.Logger
         */
        warn: function(message) {
            this.log(this.levels.WARN, message);
        },

        /**
         * Logs a message with ERROR log level.
         * @param {string|Object|Function} message log message
         * @member Utils.Logger
         */
        error: function(message) {
            this.log(this.levels.ERROR, message);
        },

        /**
         * Logs a message with FATAL log level.
         * @param {string|Object|Function} message log message
         * @member Utils.Logger
         */
        fatal: function(message) {
            this.log(this.levels.FATAL, message);
        },

        /**
         * Retrieve logger level based on system settings.
         *
         * @member Utils.Logger
         * @return {Object} Logger level or `this.levels.ERROR` if none defined.
         */
        getLevel: function() {
            var level = app.config.logger && app.config.logger.level;

            /**
             * @deprecated 7.7 It will be removed in 7.9.
             *   Use `app.config.logger.level` instead.
             * @property logLevel
             * @member SUGAR.App.config
             * FIXME: SC-5469 Remove deprecatedLevel.
             */
            var deprecatedLevel = app.config.logLevel;
            if (!level && deprecatedLevel) {
                level = deprecatedLevel;
                console.warn('The property `app.config.logLevel` has been ' +
                    'deprecated since 7.7.0.0 and will be removed in 7.9.0.0.' +
                    ' Use `app.config.logger.level` instead.');
            }

            if (!level) {
                return this.levels.ERROR;
            }
            level = level.toUpperCase();

            // FIXME this needs to be done after SC-5483 is implemented
            /*
            if (!this.levels[level]) {

                console.error('Your logger level is set to an invalid value. ' +
                    'Please redefine it in Administration > System Settings. ' +
                    'If you continue to see this warning, please ' +
                    'contact your Admin.');
            }
            */

            return this.levels[level] || this.levels.ERROR;
        },

        // TODO: We may want to add support for format strings like "Some message %s %d", params
        /**
         * Logs a message with a given {@link Utils.Logger.levels} level.
         * If the message is an object, it will be serialized into a JSON string.
         * If the message is a function, it will evaluated in the logger's scope.
         * @param {Utils.Logger.levels} level log level
         * @param {string|Object|Function} message log message
         * @member Utils.Logger
         */
        log: function(level, message) {
            try {
                var currentLevel = this.getLevel();
                if (level.value < currentLevel.value) {
                    return;
                }

                message = message || '<none>';

                if (_.isFunction(message)) message = message.call(this);
                if (_.isObject(message)) {
                    // Try to json-ify the object. It'll fail if it has circular
                    // dependency
                    try {
                        message = JSON.stringify(message);
                    } catch (e) {
                        message = message.toString();
                    }
                }

                // @deprecated Use `app.config.logger.formatter` instead, old
                // property should be removed on 7.9 (SC-5469)
                // FIXME: SC-5478 Add deprecation warning and change order of operations.
                var logger = app.config.logger,
                    formatter = this[app.config.logFormatter];
                if (!formatter) {
                    formatter = (logger && this[logger.formatter]) || this.SimpleFormatter;
                }

                message = formatter.format(level, message, new Date());

                // @deprecated Use `app.config.logger.consoleWriter` instead, old
                // property should be removed on 7.9 (SC-5469)
                // FIXME: SC-5479 Add deprecation warning and change order of operations.
                var consoleWriter = this[app.config.logWriter];
                if (!consoleWriter) {
                    consoleWriter = (logger && this[logger.consoleWriter]) || this.ConsoleWriter;
                }

                var serverWriter = (logger && this[logger.serverWriter]) || this.ServerWriter;

                consoleWriter.write(level, message);
                serverWriter.write(level, message);

            } catch (e) {
                console.log('Failed to log message {' + message + '} due to exception: ' + e);
            }
        }
    }, false);

})(SUGAR.App);
