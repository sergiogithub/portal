{{-- <div class="modal fade hr_round_review" id="application_reject_modal" tabindex="-1" role="dialog" aria-labelledby="application_reject_modal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Select action</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            	<div class="d-flex align-items-center">
                	<span>Refer this candidate for&nbsp;&nbsp;</span>
            		<select name="refer_to" id="refer_to" class="form-control w-50">
                    @foreach($allApplications as $application)
                        @if ($application->id != $currentApplication->id)
                            <option value="{{ $application->id }}">{{ $application->job->title }}</option>
                        @endif
                    @endforeach
            		</select>
            		<button class="btn btn-primary ml-2 px-4 round-submit" data-action="refer">GO</button>
                </div>
                <h3 class="my-4 pl-1">OR</h3>
                <div class="d-flex align-items-center">
                    <button type="button" class="btn btn-outline-danger round-submit" data-action="reject">Reject this candidate for all jobs</button>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<div class="modal fade" id="application_reject_modal" tabindex="-1" role="dialog" aria-labelledby="application_reject_modal"
    aria-hidden="true" v-if="selectedAction == 'round'">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="d-block">
                    <h5 class="modal-title">Reject application</h5>
                    <h6 class="text-secondary">{{ $applicationRound->application->applicant->name }} &mdash;
                        {{ $applicationRound->application->applicant->email }}</h6>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
                <div class="form-check">
                    <h5><b> Select Reasons: </b></h5>
                    <div class="rejection-reason-block">
                        <label for="reasonTitle1">
                            <input type="checkbox" class="reject-reason" id="reasonTitle1" name='reason[1][title]' value='No response'>No response <br>
                        </label>
                        <br />
                        <input type="text" name='reason[1][comment]' style="display: none" />
                    </div>
                    <div class="rejection-reason-block">
                        <label for="reasonTitle2">
                            <input type="checkbox" class="reject-reason" id="reasonTitle2" name='reason[2][title]' value='Skills mismatch'> Skills mismatch
                        </label>
                        <br />
                        <input type="text" name='reason[2][comment]' style="display: none" />
                    </div>
                    <div class="rejection-reason-block">
                        <label for="reasonTitle3">
                            <input type="checkbox" class="reject-reason" id="reasonTitle3" name='reason[3][title]' value='Culture mismatch'> Culture mismatch 
                        </label>
                        <br />
                        <input type="text" name='reason[3][comment]' style="display: none" />
                    </div>
                    <div class="rejection-reason-block">
                        <label for="reasonTitle4">
                            <input type="checkbox" class="reject-reason" id="reasonTitle4" name='reason[4][title]' value='Salary  expectation mismatch'> Salary  expectation mismatch 
                        </label>
                        <br />
                        <input type="text" name='reason[4][comment]' style="display: none" />
                    </div>
                    <div class="rejection-reason-block">
                        <label for="reasonTitle5">
                            <input type="checkbox" class="reject-reason" id="reasonTitle5" name='reason[5][title]' value='Not enough knowledge/inclination for ColoredCow'> Not enough knowledge/inclination for ColoredCow
                        </label>
                        <br />
                        <input type="text" name='reason[5][comment]' style="display: none" />
                    </div>
                </div>
                    <div class="modal-body">
                        <div class="form-row">
                            <div class="form-group col-md-12 d-flex align-items-center">
                                <div class="py-0.67">
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" name="send_mail_to_applicant[reject]" class="custom-control-input send-mail-to-applicant" id="rejectSendMailToApplicant" data-target="#previewMailToApplicant" checked>
                                        <label class="custom-control-label" for="rejectSendMailToApplicant">Send email</label>
                                    </div>
                                </div>
                                <div class="toggle-block-display c-pointer rounded-circle bg-theme-gray-lightest hover-bg-theme-gray-lighter px-1 py-0.67 ml-1" id="previewMailToApplicant" data-target="#rejectMailToApplicantBlock" data-toggle-icon="true">
                                    <i class="fa fa-eye toggle-icon d-none" aria-hidden="true"></i>
                                    <i class="fa fa-eye-slash toggle-icon" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                        <div class="form-row d-none" id="rejectMailToApplicantBlock">
                            <div class="form-group col-md-12">
                                <label for="rejectMailToApplicantSubject">Subject</label>
                                <input type="text" name="mail_to_applicant[reject][subject]" id="rejectMailToApplicantSubject"
                                    class="form-control">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="rejectMailToApplicantBody">Body</label>
                                <textarea name="mail_to_applicant[reject][body]" id="rejectMailToApplicantBody" class="form-control richeditor"></textarea>
                            </div>
                        </div>
                        <div class="form-row mt-2">
                            <div class="form-group col-md-12">
                                <input type="hidden" name="follow_up_comment_for_reject" id="followUpCommentForReject" />
                                <button type="save" class="btn btn-danger px-4 round-submit" data-action="reject">Reject</button>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
</div>
