<?php

namespace XMultibyte\BladeFormatter\Tests\Feature;

use Illuminate\Support\Facades\File;
use XMultibyte\BladeFormatter\Tests\TestCase;

/**
 * @covers \XMultibyte\BladeFormatter\Console\Commands\BladeFormatterCommand
 */
class BladeFormatterCommandTest extends TestCase
{
    public function test_it_formats_blade_file(): void
    {
        $path = base_path('test.blade.php');

        File::put($path, "@if(true)\n<p>hello</p>\n@endif");

        $this->artisan('blade:format', [
            'paths' => [$path],
            '--write' => true,
        ])->assertExitCode(0);

        $this->assertSame("@if (true)\n    <p>hello</p>\n@endif\n", File::get($path));

        File::delete($path);
    }
}
