<?php

namespace App\Console\Commands;

use App\Models\MainTable;
use App\Models\MainTableField;
use Illuminate\Console\Command;

class CreateInitTable extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:create-init-table';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $mainTable = $this->createMainTable();

        $this->createMainTableFields($mainTable);

        dd($mainTable);
    }

    private function createMainTable()
    {
        $data = [
            'name' => 'Orders',
        ];

        $mainTable = MainTable::firstOrCreate($data, $data);

        return $mainTable;
    }

    private function createMainTableFields(MainTable $mainTable)
    {
        $data = [
            [
                'name' => 'key',
                'type' => 'string',
                'order' => 1,
            ],
            [
                'name' => 'price',
                'type' => 'string',
                'order' => 2,
            ],
            [
                'name' => 'status',
                'type' => 'string',
                'order' => 3,
            ],
        ];

        foreach ($data as $fieldData) {
            $mainTable->fields()->create($fieldData);
        }

    }
}
