<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller

{

    public function index()

    {

        // Your portfolio data - you can modify these details

        $portfolio = [
            'name' => 'Nikki Devaras',
            'title' => 'App Product',
            'email' => 'devarasnikki6@gmail.com',
            'phone' => '+639366443729',
            'location' => 'PH, Manila',
            'bio' => 'Passionate web developer with 5+ years of experience...',
            'profile_image' => 'c:/Users/STUDENT-PC15/Pictures/497b16df7db1456453db1ea5af6ce6ec.jpg',
            'skills' => ['Laravel', 'PHP', 'JavaScript', 'HTML5', 'CSS3'],
            'projects' => [
                [
                    'name' => 'Sample Project',
                    'description' => 'A web application built with Laravel.'
                ]
            ],
            'experience' => [
                [
                    'role' => 'Web Developer',
                    'company' => 'Example Corp',
                    'years' => '2020-2025'
                ]
            ],
            'education' => [
                [
                    'degree' => 'Student',
                    'school' => 'Sample University'
                ]
            ],
            'social_links' => [
                'facebook' => 'https://facebook.com/yourprofile'
            ]
        ];

            

        return view('portfolio.index', compact('portfolio'));

    }

}