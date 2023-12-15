<?php

namespace MicroweberPackages\Template\Big\migrations;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;


return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $old_fields = [
            'big_content',
            'new-world_content',
            'shopmag_content',
            'wedding_content',
            'guesthouse_content',
            'digital_content',
            'qtheme_content',
            'beauty_content',
            'bamboo_content',
            'theplace_content'
        ];


        if (Schema::hasTable('content_fields')) {

            foreach ($old_fields as $old_field) {
                $fields = DB::table('content_fields')
                    ->whereIn('field', [$old_field, 'content'])
                    ->where('rel_type', 'content')
                    ->get();

                if ($fields) {
                    foreach ($fields as $field) {
                        // move to content table
                        DB::table('content')
                            ->where('id', $field->rel_id)
                            ->limit(1)
                            ->update(['content' => $field->value]);

                        //clean old fields
                        DB::table('content_fields')
                            ->where('field', 'content')
                            ->where('rel_id', $field->rel_id)
                            ->where('rel_type', $field->rel_type)
                            ->delete();

                        DB::table('content_fields')
                            ->where('id', $field->id)
                            ->delete();

                    }
                }
            }


        }
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

    }
};


