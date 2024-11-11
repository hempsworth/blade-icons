<?php

declare(strict_types=1);

namespace Tests;

class CachingTest extends TestCase
{
    
    /** @test */
    public function it_can_create_a_cache_file()
    {
        $this->artisan('icons:cache')
            ->expectsOutput("\n   INFO  Blade icons cached successfully.  \n")
            ->assertExitCode(0);
    }

    /** @test */
    public function it_can_clear_the_cache()
    {
        $this->artisan('icons:clear')
            ->expectsOutput("\n   INFO  Cached blade icons cleared successfully.  \n")
            ->assertExitCode(0);
    }
}
