<?php

namespace Database\Seeders;

use App\Models\Major;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
                'image' => 'images/majors/internal-medicine.jpg',
            ],
            [
                'name' => 'Pediatrics',
                'image' => 'images/majors/pediatrics.jpg',
            ],
            [
                'name' => 'Surgery',
                'image' => 'images/majors/surgery.jpg',
            ],
            [
                'name' => 'Obstetrics and Gynecology',
                'image' => 'images/majors/obstetrics-gynecology.jpg',
            ],
            [
                'name' => 'Psychiatry',
                'image' => 'images/majors/psychiatry.jpg',
            ],
            [
                'name' => 'Family Medicine',
                'image' => 'images/majors/family-medicine.jpg',
            ],
            [
                'name' => 'Emergency Medicine',
                'image' => 'images/majors/emergency-medicine.jpg',
            ],
            [
                'name' => 'Anesthesiology',
                'image' => 'images/majors/anesthesiology.jpg',
            ],
            [
                'name' => 'Radiology',
                'image' => 'images/majors/radiology.jpg',
            ],
            [
                'name' => 'Pathology',
                'image' => 'images/majors/pathology.jpg',
            ],
            [
                'name' => 'Dermatology',
                'image' => 'images/majors/dermatology.jpg',
            ],
            [
                'name' => 'Ophthalmology',
                'image' => 'images/majors/ophthalmology.jpg',
            ],
            [
                'name' => 'Orthopedic Surgery',
                'image' => 'images/majors/orthopedic-surgery.jpg',
            ],
            [
                'name' => 'Cardiology',
                'image' => 'images/majors/cardiology.jpg',
            ],
            [
                'name' => 'Neurology',
                'image' => 'images/majors/neurology.jpg',
            ],
            [
                'name' => 'Neurosurgery',
                'image' => 'images/majors/neurosurgery.jpg',
            ],
            [
                'name' => 'Oncology',
                'image' => 'images/majors/oncology.jpg',
            ],
            [
                'name' => 'Gastroenterology',
                'image' => 'images/majors/gastroenterology.jpg',
            ],
            [
                'name' => 'Pulmonology',
                'image' => 'images/majors/pulmonology.jpg',
            ],
            [
                'name' => 'Endocrinology',
                'image' => 'images/majors/endocrinology.jpg',
            ],
            [
                'name' => 'Nephrology',
                'image' => 'images/majors/nephrology.jpg',
            ],
            [
                'name' => 'Rheumatology',
                'image' => 'images/majors/rheumatology.jpg',
            ],
            [
                'name' => 'Infectious Disease',
                'image' => 'images/majors/infectious-disease.jpg',
            ],
            [
                'name' => 'Hematology',
                'image' => 'images/majors/hematology.jpg',
            ],
            [
                'name' => 'Plastic Surgery',
                'image' => 'images/majors/plastic-surgery.jpg',
            ],
            [
                'name' => 'Urology',
                'image' => 'images/majors/urology.jpg',
            ],
            [
                'name' => 'Otolaryngology (ENT)',
                'image' => 'images/majors/otolaryngology.jpg',
            ],
            [
                'name' => 'Cardiothoracic Surgery',
                'image' => 'images/majors/cardiothoracic-surgery.jpg',
            ],
            [
                'name' => 'Vascular Surgery',
                'image' => 'images/majors/vascular-surgery.jpg',
            ],
            [
                'name' => 'Physical Medicine and Rehabilitation',
                'image' => 'images/majors/physical-medicine-rehabilitation.jpg',
            ],
        ];

        Major::insert($majors);
    }
}
