<?php

return [
    /*
    * This settings controls whether data should be sent to Ray.
    *
    * By default, `ray()` will only transmit data in non-production environments.
    */
    'enable' => env('RAY_ENABLED', true),

    /*
    * When enabled, all cache events  will automatically be sent to Ray.
    */
    'send_cache_to_ray' => env('SEND CACHE_TO_RAY', false),

    /*
    * When enabled, all things passed to `dump` or `dd`
    * will be sent to Ray as well.
    */
    'send_dumps_to_ray' => env('SEND_DUMPS_TO_RAY', true),

    /*
    * When enabled all job events will automatically be sent to Ray.
    */
    'send_jobs_to_ray' => env('SEND JOBS_TO_RAY', false),

    /*
    * When enabled, all things logged to the application log
    * will be sent to Ray as well.
    */
    'send_log_calls_to_ray' => env('SEND_LOG_CALLS_TO_RAY', true),

    /*
    * When enabled, all queries will automatically be sent to Ray.
    */
    'send_queries_to_ray' => env('SEND QUERIES_TO_RAY', false),

    /*
    * When enabled, all requests made to this app will automatically be sent to Ray.
    */
    'send_requests_to_ray' => env('SEND REQUESTS_TO_RAY', false),

    /*
    * When enabled, all views that are rendered automatically be sent to Ray.
    */
    'send_views_to_ray' => env('SEND VIEWS_TO_RAY', false),

    /*
    * The host used to communicate with the Ray app.
    * For usage in Docker on Mac or Windows, you can replace host with 'host.docker.internal'
    * For usage in Homestead on Mac or Windows, you can replace host with '10.0.2.2'
    */
    'host' => env('RAY_HOST', 'localhost'),

    /*
    * The port number used to communicate with the Ray app.
    */
    'port' => env('RAY_PORT', 28517),

    /*
     * Absolute base path for your sites or projects in Homestead,
     * Vagrant, Docker, or another remote development server.
     */
    'remote_path' => env('RAY_REMOTE_PATH', null),

    /*
     * Absolute base path for your sites or projects on your local
     * computer where your IDE or code editor is running on.
     */
    'local_path' => env('RAY_LOCAL_PATH', null),

    /*
     * When this setting is enabled, the package will not try to format values sent to Ray.
     */
    'always_send_raw_values' => false,
];
