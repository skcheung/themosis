<?php

namespace Tests\Feature;

use function Pest\Laravel\get;

test('the application returns a successful response', function () {
    get('/api/hello')->assertStatus(200);
});
