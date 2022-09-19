<?php

namespace Modules\Project\Console;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;
use Illuminate\Support\Facades\Mail;
use Modules\Project\Entities\Project;
use Modules\Project\Emails\SendMailForNotHavingProjectEndDate;



class MailToAccountManagerForNotHavingEndDate extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'project:send-daily-mail-for-not-having-project-end-date';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sends a mail to key account manager that fixed budget project is not having an end date';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $projects = Project::all();
        foreach ($projects as $project) {
            if($project->end_date == null) {
                Mail::send(new SendMailForNotHavingProjectEndDate($project));
            }
        }
    }
}