<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use AhmedAliraqi\LangGenerator\Manager;
use Laraeast\LaravelLocales\Facades\Locales;

class LangGenerateJsonCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'lang:generate-json';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate JSON translation keys only (FAST)';

    public function handle()
    {
        // Get all matched translation keys from the project
        $matches = array_unique(app(Manager::class)->getMatched());

        // Store only JSON keys (non-PHP translation keys)
        $jsonKeys = [];

        // Get defined PHP translation aliases from config
        $aliases = array_keys(config('lang-generator.lang'));

        foreach ($matches as $key) {
            if (empty($key)) {
                continue;
            }

            // Check if the key belongs to PHP translation files
            $isPhpKey = false;

            foreach ($aliases as $alias) {
                if (str_starts_with($key, $alias . '.')) {
                    $isPhpKey = true;
                    break;
                }
            }

            // Skip PHP translation keys
            if ($isPhpKey) {
                continue;
            }

            // Add valid JSON key
            $jsonKeys[] = $key;
        }

        // Stop if no JSON keys found
        if (empty($jsonKeys)) {
            $this->info("No JSON keys found.");
            return;
        }

        foreach (Locales::get() as $locale) {

            $langCode = $locale->getCode();
            $jsonPath = base_path("lang/{$langCode}.json");

            // Load existing JSON file or initialize empty array
            $data = file_exists($jsonPath)
                ? json_decode(file_get_contents($jsonPath), true)
                : [];

            $updated = false;

            foreach ($jsonKeys as $key) {

                // Add key only if it does not already exist
                if (!isset($data[$key])) {
                    $data[$key] = $key;
                    $updated = true;

                    $this->line("✔ {$key}");
                }
            }

            // Write file only if there are changes
            if ($updated) {
                file_put_contents(
                    $jsonPath,
                    json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT)
                );

                $this->info("Updated JSON: {$jsonPath}");
            } else {
                $this->info("No changes for: {$jsonPath}");
            }
        }

        $this->info("🚀 JSON generation completed (FAST)");
    }
}
