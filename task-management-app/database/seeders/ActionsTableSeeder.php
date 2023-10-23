<?php

namespace Database\Seeders;

use App\Models\Action;
use Illuminate\Database\Seeder;

class ActionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $actions = [
            ['name' => 'Strengthen the existing curriculum development committees in the faculties', 'strategy_id' => 1],
            ['name' => 'Adopt a participatory approach in academic program design and development', 'strategy_id' => 1],
            ['name' => 'Adopt SLQF and SBSs as reference points in developing curricula', 'strategy_id' => 1],
            ['name' => 'Involve external stakeholder and get feedback at key stages of program planning, design and development and review', 'strategy_id' => 1],
            ['name' => 'Set up a monitoring system to ensure effective implementation of activities relevant to the academic programs', 'strategy_id' => 1],
            ['name' => 'Strengthen Outcome-Based Education and Student-Centered Learning (OBE -SCL)', 'strategy_id' => 1],
            ['name' => 'Strengthen alumna associations at faculty level to facilitate the quality improvement of academic programs', 'strategy_id' => 1],
            ['name' => 'Facilitate socio emotional skill development in the curriculum development process', 'strategy_id' => 1],
  
            ['name' => 'Improving access to ICT resources', 'strategy_id' => 2],
            ['name' => 'Set up a mechanism to implement and monitor innovative pedagogy and appropriate technology into teaching and learning processes', 'strategy_id' => 2],
            ['name' => 'Strengthen teaching-learning methodologies', 'strategy_id' => 2],
            ['name' => 'Adapting diverse learning strategies as a way of maximizing student active engagement with the program', 'strategy_id' => 2],
            ['name' => 'Develop a mechanism to ensure effective functioning of academic program', 'strategy_id' => 2],
            
            ['name' => 'Develop a mechanism to continuously monitor student support services', 'strategy_id' => 3],
            ['name' => 'Organize sports, aesthetic programs, social events and recreational activities', 'strategy_id' => 3],
            ['name' => 'Conduct student satisfaction survey periodically', 'strategy_id' => 3],

            ['name' => 'Establish/Upgrade industrial training centers at the faculty level', 'strategy_id' => 4],
            ['name' => 'Expose students to world of work through industry linkages', 'strategy_id' => 4],
            ['name' => 'Strengthen the University Industry Business Linkage', 'strategy_id' => 4],
            
            ['name' => 'Upgrade the career guidance unit with physical and human resources to create conducive environment for career guidance', 'strategy_id' => 5],
            ['name' => 'Develop a mechanism to conduct mentoring and counseling programs on regular basis', 'strategy_id' => 5],
            ['name' => 'Strengthen student interaction with alumni and encourage alumni to assist students in their professional development', 'strategy_id' => 5],
            ['name' => 'Ensure safe teaching and learning environment', 'strategy_id' => 5],

            ['name' => 'Formulation of a research grant policy', 'strategy_id' => 6],
            ['name' => 'Ensure the allocation of 10% of the capital budget for research grants', 'strategy_id' => 6],
            ['name' => 'Improve the competencies of academic staff to obtain the competitive research grants', 'strategy_id' => 6],
            ['name' => 'Establish faculty level research funds', 'strategy_id' => 6],

            ['name' => 'Establish faculty level research units', 'strategy_id' => 7],
            ['name' => 'Increase purchasing of equipment, software required for research', 'strategy_id' => 7],
            ['name' => 'Provide access to journal and e-resources', 'strategy_id' => 7],

            ['name' => 'Formulation of policies and procedures for collaborative research involving academics, students, and industry', 'strategy_id' => 8],
            ['name' => 'Signing MOU/MOA with industry and foreign universities', 'strategy_id' => 8],

            ['name' => 'Organize student research forums to disseminate findings', 'strategy_id' => 9],
            ['name' => 'Conduct annual research symposium by all faculties', 'strategy_id' => 9],
            ['name' => 'Conduct university international symposium', 'strategy_id' => 9],

            ['name' => 'Ensure the publication of university journals bi-annual', 'strategy_id' => 10],
            ['name' => 'Introduce faculty journals', 'strategy_id' => 10],

            ['name' => 'Develop policies and procedures for awarding and rewarding researchers at the faculty level', 'strategy_id' => 11],
            ['name' => 'Recognize and reward national and international outstanding research works and publications of the university community', 'strategy_id' => 11],
            
            ['name' => 'Prepare a contour map for University Land', 'strategy_id' => 12],
            ['name' => 'Prepare a master plan for the University Road network', 'strategy_id' => 12],
            ['name' => 'Prepare drawing plans for the electricity supply, water supply, and network line in the University', 'strategy_id' => 12],
            
            ['name' => 'Strengthen ICT resources and infrastructure', 'strategy_id' => 13],
            ['name' => 'Improve the physical facilities of all the other Faculties', 'strategy_id' => 13],
            ['name' => 'Improve the physical facilities of administration offices', 'strategy_id' => 13],
            ['name' => 'Improve the physical facilities of student support services (health, sports, cafeterias, hostels and accommodations, etc.)', 'strategy_id' => 13],
            
            ['name' => 'Promote Professionalism of the staff', 'strategy_id' => 14],
            ['name' => 'Improve/Establish Security System for the critical areas including Surveying equipment store (Fire alarms, Smore alarms)', 'strategy_id' => 14],
            
            ['name' => 'Organize students centered outreach activities', 'strategy_id' => 15],
            ['name' => 'Organize Professional Development program', 'strategy_id' => 15],
        ];


        foreach ($actions as $action) {
            Action::create($action);
        }
    }
}
