<?php

namespace Database\Seeders;

use App\Models\Major;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MajorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $majors = [
            [
                'name' => 'Internal Medicine',
                'image' => 'front/assets/images/majors/internal-medicine.jpg',
            ],
            [
                'name' => 'Pediatrics',
                'image' => 'front/assets/images/majors/pediatrics.jpg',
            ],
            [
                'name' => 'Surgery',
                'image' => 'front/assets/images/majors/surgery.jpg',
            ],
            [
                'name' => 'Obstetrics and Gynecology',
                'image' => 'front/assets/images/majors/obstetrics-gynecology.jpg',
            ],
            [
                'name' => 'Psychiatry',
                'image' => 'front/assets/images/majors/psychiatry.jpg',
            ],
            [
                'name' => 'Family Medicine',
                'image' => 'front/assets/images/majors/family-medicine.jpg',
            ],
            [
                'name' => 'Emergency Medicine',
                'image' => 'front/assets/images/majors/emergency-medicine.jpg',
            ],
            [
                'name' => 'Anesthesiology',
                'image' => 'front/assets/images/majors/anesthesiology.jpg',
            ],
            [
                'name' => 'Radiology',
                'image' => 'front/assets/images/majors/radiology.jpg',
            ],
            [
                'name' => 'Pathology',
                'image' => 'front/assets/images/majors/pathology.jpg',
            ],
            [
                'name' => 'Dermatology',
                'image' => 'front/assets/images/majors/dermatology.jpg',
            ],
            [
                'name' => 'Ophthalmology',
                'image' => 'front/assets/images/majors/ophthalmology.jpg',
            ],
            [
                'name' => 'Orthopedic Surgery',
                'image' => 'front/assets/images/majors/orthopedic-surgery.jpg',
            ],
            [
                'name' => 'Cardiology',
                'image' => 'front/assets/images/majors/cardiology.jpg',
            ],
            [
                'name' => 'Neurology',
                'image' => 'front/assets/images/majors/neurology.jpg',
            ],
            [
                'name' => 'Neurosurgery',
                'image' => 'front/assets/images/majors/neurosurgery.jpg',
            ],
            [
                'name' => 'Oncology',
                'image' => 'front/assets/images/majors/oncology.jpg',
            ],
            [
                'name' => 'Gastroenterology',
                'image' => 'front/assets/images/majors/gastroenterology.jpg',
            ],
            [
                'name' => 'Pulmonology',
                'image' => 'front/assets/images/majors/pulmonology.jpg',
            ],
            [
                'name' => 'Endocrinology',
                'image' => 'front/assets/images/majors/endocrinology.jpg',
            ],
            [
                'name' => 'Nephrology',
                'image' => 'front/assets/images/majors/nephrology.jpg',
            ],
            [
                'name' => 'Rheumatology',
                'image' => 'front/assets/images/majors/rheumatology.jpg',
            ],
            [
                'name' => 'Infectious Disease',
                'image' => 'front/assets/images/majors/infectious-disease.jpg',
            ],
            [
                'name' => 'Hematology',
                'image' => 'front/assets/images/majors/hematology.jpg',
            ],
            [
                'name' => 'Plastic Surgery',
                'image' => 'front/assets/images/majors/plastic-surgery.jpg',
            ],
            [
                'name' => 'Urology',
                'image' => 'front/assets/images/majors/urology.jpg',
            ],
            [
                'name' => 'Otolaryngology (ENT)',
                'image' => 'front/assets/images/majors/otolaryngology.jpg',
            ],
            [
                'name' => 'Cardiothoracic Surgery',
                'image' => 'front/assets/images/majors/cardiothoracic-surgery.jpg',
            ],
            [
                'name' => 'Vascular Surgery',
                'image' => 'front/assets/images/majors/vascular-surgery.jpg',
            ],
            [
                'name' => 'Physical Medicine and Rehabilitation',
                'image' => 'front/assets/images/majors/physical-medicine-rehabilitation.jpg',
            ],
        ];

        foreach ($majors as $major) {
            # code...
            Major::create($major);
        }

    }
}
