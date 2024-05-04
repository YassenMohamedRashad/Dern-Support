<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            "Web Development" => "Designing and developing websites and web applications.",
            "Mobile App Development" => "Creating mobile applications for iOS and Android platforms.",
            "Software Development" => "Building custom software solutions for various business needs.",
            "UI/UX Design" => "Crafting intuitive and visually appealing user interfaces and experiences.",
            "IT Consulting" => "Providing expert advice and guidance on technology strategy.",
            "Cloud Computing" => "Offering cloud-based solutions for scalable and flexible infrastructure.",
            "Cybersecurity" => "Implementing measures to protect against cyber threats and vulnerabilities.",
            "Data Analytics" => "Analyzing data to derive insights and improve decision-making processes.",
            "IT Infrastructure Management" => "Managing and maintaining IT infrastructure components.",
            "Managed IT Services" => "Outsourcing day-to-day IT operations and support.",
            "Digital Marketing" => "Promoting products or services through digital channels.",
            "E-commerce Solutions" => "Building online stores and platforms for selling products.",
            "Blockchain Development" => "Developing decentralized applications and blockchain solutions.",
            "Internet of Things (IoT) Solutions" => "Designing and developing IoT applications and systems.",
            "Augmented Reality (AR) and Virtual Reality (VR)" => "Creating immersive experiences for various applications.",
            "Artificial Intelligence (AI) and Machine Learning (ML)" => "Implementing AI and ML algorithms for automation and insights.",
            "Quality Assurance and Testing" => "Ensuring software quality through comprehensive testing processes.",
            "IT Training and Workshops" => "Providing training programs to enhance technical skills.",
            "IT Support and Helpdesk" => "Offering technical support and troubleshooting assistance.",
            "Custom ERP/CRM Development" => "Developing tailored solutions for enterprise resource planning and CRM.",
        ];


        foreach ($services as $name => $des) {
            Service::create([
                "name" => $name,
                "description" => $des,
                "cost" => random_int(50, 150),
                "category_id" => random_int(1, 2)
            ]);
        }
    }
}
