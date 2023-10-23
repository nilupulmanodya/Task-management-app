<?php

namespace Database\Seeders;

use App\Models\SubAction;
use Illuminate\Database\Seeder;

class SubActionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $actions = [
            ['name' => 'Nominate the members from FB', 'action_id' => 1],

            ['name' => 'Workshops Organized', 'action_id' => 2],
            ['name' => 'Seminars Organized', 'action_id' => 2],
            ['name' => 'Discussion Organized', 'action_id' => 2],
            ['name' => 'RICS annual Review', 'action_id' => 2],
            ['name' => 'FIG Academic Membership', 'action_id' => 2],
            ['name' => 'Cad B annual Review', 'action_id' => 2],
            ['name' => 'Program review', 'action_id' => 2],

            ['name' => 'Workshops Organized', 'action_id' => 3],
            ['name' => 'Seminars Organized', 'action_id' => 3],
            ['name' => 'Discussion Organized', 'action_id' => 3],
            ['name' => 'Course Advisory Committee Meetings', 'action_id' => 3],

            ['name' => 'Workshops Organized', 'action_id' => 4],
            ['name' => 'Seminars Organized', 'action_id' => 4],
            ['name' => 'Discussion Organized', 'action_id' => 4],
            ['name' => 'Course Advisory Committee Meetings', 'action_id' => 4],

            ['name' => 'Setting up faculty Curriculum monitoring committee', 'action_id' => 5],
            ['name' => 'Send Feedback by the Curriculum Monitoring Committee', 'action_id' => 5],

            ['name' => 'Workshops Organized', 'action_id' => 6],
            ['name' => 'Seminars Organized', 'action_id' => 6],
            ['name' => 'Discussion Organized', 'action_id' => 6],


            ['name' => 'Encourage to provide inputs for academic program quality improvements', 'action_id' => 7],
            ['name' => 'Workshops Organized', 'action_id' => 7],
            ['name' => 'Seminars Organized', 'action_id' => 7],
            ['name' => 'Discussion Organized', 'action_id' => 7],

            ['name' => 'Develop Faculty e-learning System', 'action_id' => 9],
            ['name' => 'Establish Smart Class Rooms', 'action_id' => 9],
            ['name' => 'Online Access to study materials', 'action_id' => 9],
            ['name' => 'Development of Text Books', 'action_id' => 9],
            ['name' => 'Development of Guide Books', 'action_id' => 9],
            ['name' => 'Establishment of Open Source GIS lab', 'action_id' => 9],
            ['name' => 'Promote open source software', 'action_id' => 9],

            ['name' => 'Setting up of a monitoring system for innovative pedagogy and appropriate technology in teaching and learning,', 'action_id' => 10],
            ['name' => 'Conduct Training Programs', 'action_id' => 10],
            ['name' => 'Conduct Field Visits', 'action_id' => 10],

            ['name' => 'Development of e-learning courses and materials', 'action_id' => 11],
            ['name' => 'Developing converting distance learning degrees/diplomas', 'action_id' => 11],
            ['name' => 'Purchasing of Surveying equipments (Mrrorsterioscopes, Terrestrial Laser Scanner, Ground Penetration Radar, Spectrometer, Unmanned Areal Vehicle-AV, Low cost UAV, UAV-LIDAR, Multi spectral Sensors for UAV, Terrestrial Camera, Digital Data, Physics equipments,Instrument calibrations, Robotic station, Digital Levels, Total stations)', 'action_id' => 11],

            ['name' => 'Promote and improved interactive learning and teaching activities', 'action_id' => 12],
            ['name' => 'Workshops Organized', 'action_id' => 12],
            ['name' => 'Introduce activities in the new curriculum', 'action_id' => 12],

            ['name' => 'Establishing of mechanism to report issues of academic program', 'action_id' => 13],
            ['name' => 'Establishment of an academic program monitoring committee', 'action_id' => 13],

            ['name' => 'Initiate faculty Mentoring and counseling unit/committee', 'action_id' => 14],

            ['name' => 'Introduce compulsory non-credit courses', 'action_id' => 15],
            ['name' => 'Organizing events', 'action_id' => 15],

            ['name' => 'Survey/Feedback from final years on the program satisfaction (annual)', 'action_id' => 16],

            ['name' => 'Establishment of Industrial Training Center', 'action_id' => 17],
            ['name' => 'ITU Workshops organized', 'action_id' => 17],
            ['name' => 'Seminars organized', 'action_id' => 17],
            ['name' => 'Field supervision organized', 'action_id' => 17],

            ['name' => 'GIS/RS day/week with the collaboration of Industry organized', 'action_id' => 18],
            ['name' => 'Meetings to discuss current industry issues', 'action_id' => 18],
            ['name' => 'Forums to discuss current industry issues', 'action_id' => 18],
            ['name' => 'Increase opportunities for oversea industrial training', 'action_id' => 18],
            ['name' => 'Working for new MOUs between local/foreign industry and academic institutes for research', 'action_id' => 18],
            ['name' => 'Study and training', 'action_id' => 18],
            ['name' => 'Hydrography Workshops organized', 'action_id' => 18],
            ['name' => 'Field visits', 'action_id' => 18],

            ['name' => 'Establish faculty level Industry Business Linkage unit', 'action_id' => 19],
            ['name' => 'Conduct/Organize relevant events', 'action_id' => 19],

            ['name' => 'Appoint a faculty Career guidance coordinator', 'action_id' => 20],
            ['name' => 'Workshops organized', 'action_id' => 20],
            ['name' => 'Seminar organized', 'action_id' => 20],

            ['name' => 'Appoint a faculty-level Mentoring and counseling committee including staff and students', 'action_id' => 21],
            ['name' => 'Workshops organized', 'action_id' => 21],
            ['name' => 'Seminars organized', 'action_id' => 21],

            ['name' => 'Workshops organized for continuous learning and development of alumna and vise versa', 'action_id' => 22],
            ['name' => 'Seminars organized for continuous learning and development of alumna and vise versa', 'action_id' => 22],
            ['name' => 'Discussions organized for continuous learning and development of alumni and vise versa', 'action_id' => 22],

            ['name' => 'Introduce Insurance scheme for students/ teachers and equipment during special programs', 'action_id' => 23],

            ['name' => 'Workshops organized for competitive research grant proposal writing', 'action_id' => 26],
            ['name' => 'Seminars organized for competitive research grant proposal writing', 'action_id' => 26],

            ['name' => 'Establishment of Geo-Hub research center', 'action_id' => 28],
            ['name' => 'Establishment of Hydrography lab', 'action_id' => 28],
            ['name' => 'Purchase required office equipment and furniture', 'action_id' => 28],
            ['name' => 'Forming research groups', 'action_id' => 28],

            ['name' => 'Purchase software/computer/surveying equipments for research', 'action_id' => 29],
            ['name' => 'Upgrading and renewal of Hydrography lab', 'action_id' => 29],

            ['name' => 'Development of digital data and material repository', 'action_id' => 30],
            ['name' => 'Establishment of a dedicated server for research digital media', 'action_id' => 30],

            ['name' => 'Development of policy framework for collaborative research', 'action_id' => 31],

            ['name' => 'Initiate local/international industry and foreign MOUs', 'action_id' => 32],
            ['name' => 'Maintenance of current MOUs', 'action_id' => 32],

            ['name' => 'Annual Research sessions for students', 'action_id' => 33],

            ['name' => 'Geo-symposium', 'action_id' => 34],
            ['name' => 'Land Conference', 'action_id' => 34],

            ['name' => 'Develop policies for faculty best researcher and best teacher awards', 'action_id' => 38],

            ['name' => 'Conducting an Engineering and topographic survey for the entire university', 'action_id' => 40],
            ['name' => 'Developing required plans/maps and 3D models', 'action_id' => 40],

            ['name' => 'Conduct a detailed survey', 'action_id' => 41],
            ['name' => 'Prepare a plan for the University road network', 'action_id' => 41],

            ['name' => 'Survey the existing services', 'action_id' => 42],
            ['name' => 'Develop a GIS for the university', 'action_id' => 42],

            ['name' => 'Purchase new computers, multimedia projectors, Field laptops, laptops for staff, Server computers, Desktop computers, UPS, High-end Workstations, 3D monitors+3D mouse, Printers+Scanners, High-end Desktops (labs), 1KV+2KV UPS, Envi Software,', 'action_id' => 43],
            ['name' => 'Upgrading and renewal, Hydrography CATB', 'action_id' => 43],
            ['name' => 'Re-submission and new equipment purchase Multi beam system to here (Gyro, MRU, MBES, MB s/w, ADCP, Hydro Laptop, Hydro Workstation, underwater camera, UPS, Batteries, work vest, Snorkeling & diving kits, Grabsampler, furniture, etc)', 'action_id' => 43],

            ['name' => 'Rehabilitation/Establishment of Elevator+Generator', 'action_id' => 44],
            ['name' => 'Secured/smart access', 'action_id' => 44],
            ['name' => 'General purchases', 'action_id' => 44],
            ['name' => 'Office furniture for the new building, digital podium, steel furniture, student furniture,electrical goods', 'action_id' => 44],

            ['name' => 'Steel furniture/office equipments for office/staff', 'action_id' => 45],

            ['name' => 'Student health', 'action_id' => 46],
            ['name' => 'Student sports', 'action_id' => 46],
            ['name' => 'Student recreational', 'action_id' => 46],

            ['name' => 'Professional Membership fees payment of staff', 'action_id' => 47],

            ['name' => 'Improve/Establish Security System for the labs and Surveying equipment store (Fire alarms, Smore alarms)', 'action_id' => 48],

            ['name' => 'Awareness programs with the support of students', 'action_id' => 49],
            ['name' => 'Open days with the support of students', 'action_id' => 49],
            ['name' => 'Outreach Task - With irrigation department/CEB/DMC/CCD to prevent flooding, coastal rehabilitation, tank rehabilitation, etc', 'action_id' => 49],

            ['name' => 'Conduct CPD Programs', 'action_id' => 50],
            ['name' => 'Conduct Short Courses', 'action_id' => 50],

        ];


        foreach ($actions as $action) {
            SubAction::create($action);
        }
    }
}
