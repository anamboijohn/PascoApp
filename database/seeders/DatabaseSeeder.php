<?php

namespace Database\Seeders;

use App\Models\Level;
use App\Models\Option;
use App\Models\Pasco;
use App\Models\Programme;
use App\Models\Question;
use App\Models\Subject;
use Database\Factories\OptionFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //creates the levels SHS and JHS
        $levels = Level::factory()->count(2)->sequence(['name' => 'Senior High School', 'slug' => 'SHS'], ['name' => 'Junior High School', 'slug' => 'JHS'])->create();

        //$programmes has a list of all programmes in Ghana ShS
        $programmes = ['Science' => 'General Science', 'Agric' => 'Agricultural Science', 'Arts' => 'General Arts', 'VA' => 'Visual Arts', 'HE' => 'Home Economics', 'Business' => 'Business', 'Core' => 'Core'];

        //creates the Basic programme in database
        $basicProgramme = Programme::factory()->create(['level_id' => 2, 'name' => 'Basic', 'slug' => 'Basic']);

        //creates SHS programmes in Database
        $shsProgrammes = [];
        foreach ($programmes as $slug => $name) : $createdProgramme = Programme::factory()->create(['slug' => $slug, 'name' => $name]);
            $shsProgrammes[] = $createdProgramme;
        endforeach;


        //creates courses for SHS courses for each programme
        $scienceCourses = ['Science', 'Chem' => 'Chemistry', 'Bio' => 'Biology', 'Phy' => 'Physics', 'E-Math' => 'Elective Mathematics', 'E-ICT' => 'Elective ICT'];
        $artCourses = ['Arts', 'Lit' => 'Literature in English', 'Econs' => 'Economics', 'Twi' => 'Twi', 'Fre' => 'French', 'Gov' => 'Government', 'His' => 'History', 'CRS' => 'Christian Religious Studies', 'Geo' => 'Geography'];
        $vACourses = ['VA', 'GKA' => 'General Knowledge in Arts', 'GD' => 'Graphic Design', 'Cer' => 'Ceramics', 'LW' => 'Leather Work', 'Scu' => 'Sculpture', 'Pai' => 'Painting'];
        $agricCourses = ['Agric', 'AH' => 'Animal Hasbundary', 'GA' => 'General Agric'];
        $homeEconsCourses = ['HE', 'MIL' => 'MANAGEMENT IN LIVING', 'FAN' => 'FOOD AND NUTRITION', 'Tex' => 'TEXTILE'];
        $businessCourses = ['Business', 'Acc' => 'ACCOUNTING', 'BM' => 'BUSINESS MANAGEMENT', 'Eco' => 'ECONOMICS', 'POC' => 'PRINCIPLE OF COSTING'];
        $coreCourses = ['Core', 'Eng' => 'ENGLISH', 'Math' => 'MATHEMATICS', 'Soc' => 'SOCIAL', 'Sci' => 'SCIENCE'];
        $allCourses = [$scienceCourses, $artCourses, $vACourses, $agricCourses, $homeEconsCourses, $businessCourses, $coreCourses];

        foreach ($allCourses as $course) {
            $currentCourse = $course;
            $programmeSlug = array_shift($currentCourse);
            foreach ($currentCourse as $slug => $name) :
                collect($shsProgrammes)->where('slug', $programmeSlug)->first()->subjects()->create(['name' => $name, 'slug' => $slug]);
            endforeach;
        };

        //Creating courses for the $basic [JHS] Courses
        $basicCourses = ['IS' => 'Integrated Science', 'Math' => 'Mathematics', 'Soc' => 'Social Studies', 'Eng' => 'English', 'Fre' => 'French', 'ICT' => 'Information and Communication Technology', 'BDT' => 'Basic Design and Technology'];
        foreach ($basicCourses as $slug => $name) :
            $basicProgramme->subjects()->create(['name' => $name, 'slug' => $slug]);
        endforeach;

        //filling the pasco  table which takes [subject_id, year, type]
        //create an array containing years from 1990 to date
        //create an array comprising all subjects
        //loop over each subject and for each subject loop over the years and for each year
        //create a pasco type 'SCHOOL' and 'Novdec'

        $yearsArray = range(2010, date('Y'));
        $shsSubjects = Subject::whereNot('programme_id', 1)->get();
        foreach ($shsSubjects as $subject) {
            foreach ($yearsArray as $year) :
                $subject->pascos()->create(['year' => $year, 'type' => 'SCHOOL']);
                $subject->pascos()->create(['year' => $year, 'type' => 'NOVDEC']);
            endforeach;
        };
        $jhsSubjects = Subject::where('programme_id', 1)->get();
        foreach ($jhsSubjects as $subject) {
            foreach ($yearsArray as $year) :
                $subject->pascos()->create(['year' => $year, 'type' => 'SCHOOL']);
            endforeach;
        };

        //Creating questions for each Pasco
        $pascos = Pasco::all();
        foreach ($pascos as $pasco) :
            Question::factory()->count(40)->sequence(fn ($sequence) => ['QN' => $sequence->index + 1])
                ->create(['pasco_id' => $pasco->id]);
        endforeach;

        //creating options for each question
        $questions = Question::all();
        foreach ($questions as $question) :
            $op = Option::factory()->create(['question_id' => $question->id]);
                $A = $op->A;
                $B = $op->B;
                $C = $op->C;
                $D = $op->D;
                $opAr = [$A, $B, $C, $D];
                $answer = $opAr[rand(0, 3)];
                $op->answer = $answer;
                $op->save();
        endforeach;






        // //this creates 40 options with thier assoscietated questions and stores it in $options
        // $options = Option::factory()->count(40)->create();

        // //this loops over the created options and sets the answe value for each question
        // foreach ($options as $option) : $A = $option->A;
        //     $B = $option->B;
        //     $C = $option->C;
        //     $D = $option->D;
        //     $opAr = [$A, $B, $C, $D];
        //     $Answer = $opAr[rand(0, 3)];
        //     $option->answer = $Answer;
        //     $option->save();
        // endforeach;

        // //$questions array radey to recieve questions creaed by the options factory
        // $questions = [];
        // //this loops over the options, graps the question associated with the option and pushes it ino $questions
        // foreach ($options as $option) : $questions[] = $option->question;
        // endforeach;

        // //the questions created all has a question number of 1
        // //so this rectifies the problem what it does is that
        // //it loops of the questions in the $questions array and sets the index or key of the question
        // //as the Qeston number QN
        // foreach ($questions as $key => $question) : $question->QN = $key + 1;
        //     $question->save();
        // endforeach;

    }
}
