<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Support\Facades\Storage;

class ExampleTest extends TestCase {

    public function testFileUpload() {
        Storage::fake('app/public/files/');
        Storage::disk('app/public/files/')->assertExists('file.pdf');
        Storage::disk('app/public/files/')->assertMissing('missing.docx');
    }

}
