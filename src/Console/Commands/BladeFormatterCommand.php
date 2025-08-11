<?php

namespace XMultibyte\BladeFormatter\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Process\Process;

/**
 * Class BladeFormatterCommand
 *
 * Artisan command to run the blade-formatter Node.js tool.
 */
class BladeFormatterCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'blade:format {paths?* : File paths or globs to format}'
        . ' {--check-formatted : Only check that files are formatted}'
        . ' {--write : Write formatting changes to files}'
        . ' {--diff : Show diffs}'
        . ' {--end-with-newline : End output with newline}'
        . ' {--end-of-line= : End of line character (LF|CRLF)}'
        . ' {--indent-size= : Indentation size}'
        . ' {--wrap-line-length= : The length of line wrap size}'
        . ' {--wrap-attributes= : The way to wrap attributes}'
        . ' {--wrap-attributes-min-attrs= : Minimum number of attributes to wrap}'
        . ' {--indent-inner-html : Indent <head> and <body> sections}'
        . ' {--sort-tailwindcss-classes : Sort tailwindcss classes}'
        . ' {--tailwindcss-config-path= : Path to tailwind config}'
        . ' {--sort-html-attributes= : Sort HTML attributes}'
        . ' {--custom-html-attributes-order= : Custom HTML attribute order}'
        . ' {--no-single-quote : Use double quotes instead of single quotes}'
        . ' {--extra-liners= : Comma separated list of tags with extra newline}'
        . ' {--component-prefix= : Component prefix}'
        . ' {--no-multiple-empty-lines : Merge multiple blank lines}'
        . ' {--no-php-syntax-check : Disable PHP syntax checking}'
        . ' {--no-trailing-comma-php : Disable trailing commas in PHP expression}'
        . ' {--php-version= : PHP version for syntax checking}'
        . ' {--progress : Print progress}'
        . ' {--stdin : Format code provided on STDIN}'
        . ' {--config= : Use the specified configuration file}'
        . ' {--ignore-path= : Specify path of ignore file}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Format Blade templates using blade-formatter';

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $paths = $this->argument('paths');

        $command = array_merge(['npx', '--yes', 'blade-formatter'], $paths);

        foreach ($this->options() as $option => $value) {
            if ($value === false || $value === null) {
                continue;
            }

            $command[] = '--' . $option;

            if (! is_bool($value)) {
                $command[] = $value;
            }
        }

        $process = new Process($command);
        $process->run();

        $this->output->write($process->getOutput());

        if (! $process->isSuccessful()) {
            $this->error($process->getErrorOutput());
        }

        return $process->getExitCode();
    }
}
