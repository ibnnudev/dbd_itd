<?php

namespace App\Repositories;

use App\Models\Abj;
use App\Models\Ksh;
use App\Repositories\Interface\KshInterface;
use Illuminate\Support\Facades\DB;

class KshRepository implements KshInterface
{
    private $ksh;
    private $abj;

    public function __construct(Ksh $ksh, Abj $abj) {
        $this->ksh = $ksh;
        $this->abj = $abj;
    }

    public function getAll()
    {
        $samples = $this->ksh->with(['regency', 'district', 'village', 'detailKsh'])->get();
        $samples->map(function($sample){
            $sample->total_sample = $sample->detailKsh->count();
            return $sample;
        });

        // order by created_at desc
        $samples = $samples->sortByDesc('created_at');

        return $samples;
    }

    public function getById($id)
    {
        return $this->ksh->with(['regency', 'district', 'village', 'detailKsh'])->find($id);
    }

    public function create($attributes)
    {
        return $this->ksh->create([
            'regency_id' => $attributes['regency_id'],
            'district_id' => $attributes['district_id'],
            'village_id' => $attributes['village_id'],
            'latitude' => $attributes['latitude'],
            'longitude' => $attributes['longitude'],
        ]);
    }

    public function edit($attributes, $id)
    {
        return $this->ksh->find($id)->update([
            'regency_id' => $attributes['regency_id'],
            'district_id' => $attributes['district_id'],
            'village_id' => $attributes['village_id'],
            'latitude' => $attributes['latitude'],
            'longitude' => $attributes['longitude'],
        ]);
    }
}
