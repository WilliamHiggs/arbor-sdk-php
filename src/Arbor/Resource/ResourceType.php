<?php

namespace Arbor\Resource;

class ResourceType
{
    const ACADEMIC_CALENDAR_DATE = 'AcademicCalendarDate';
    const ACADEMIC_LEVEL = 'AcademicLevel';
    const ACADEMIC_LEVEL_MEMBERSHIP = 'AcademicLevelMembership';
    const ACADEMIC_LEVEL_REGISTRATION_FORM_MAPPING = 'AcademicLevelRegistrationFormMapping';
    const ACADEMIC_LEVEL_TUTOR = 'AcademicLevelTutor';
    const ACADEMIC_HOLIDAY = 'AcademicHoliday';
    const ACADEMIC_NOTE = 'AcademicNote';
    const ACADEMIC_PROGRAMME = 'AcademicProgramme';
    const ACADEMIC_PROGRAMME_INSTANCE = 'AcademicProgrammeInstance';
    const ACADEMIC_TEACHING_HOUR = 'AcademicTeachingHour';
    const ACADEMIC_UNIT = 'AcademicUnit';
    const ACADEMIC_UNIT_ASSESSMENT = 'AcademicUnitAssessment';
    const ACADEMIC_UNIT_AUTOMATIC_ENROLMENT = 'AcademicUnitAutomaticEnrolment';
    const ACADEMIC_UNIT_CURRICULUM = 'AcademicUnitCurriculum';
    const ACADEMIC_UNIT_ENROLMENT = 'AcademicUnitEnrolment';
    const ACADEMIC_UNIT_ENROLMENT_IMPORT = 'AcademicUnitEnrolmentImport';
    const ACADEMIC_UNIT_LEAD = 'AcademicUnitLead';
    const ACADEMIC_UNIT_QUALIFICATION_AWARD = 'AcademicUnitQualificationAward';
    const ACADEMIC_UNIT_QUALIFICATION_LINK = 'AcademicUnitQualificationLink';
    const ACADEMIC_UNIT_TAG = 'AcademicUnitTag';
    const ACADEMIC_UNIT_DEPARTMENT = 'AcademicUnitDepartment';
    const ACADEMIC_YEAR = 'AcademicYear';
    const ACADEMIC_WORKING_DAY = 'AcademicWorkingDay';
    const ACHIEVEMENT_LEVEL = 'AchievementLevel';
    const ACCESS_ARRANGEMENT = 'AccessArrangement';
    const CANDIDATE_ACCESS_ARRANGEMENT = 'CandidateAccessArrangement';
    const ACHIEVEMENT_LEVEL_SET = 'AchievementLevelSet';
    const ADDITIONAL_PAYMENT_REASON = 'AdditionalPaymentReason';
    const AD_HOC_ASSESSMENT = 'AdHocAssessment';
    const AD_HOC_ASSESSMENT_BATCH = 'AdHocAssessmentBatch';
    const AD_HOC_ASSESSMENT_BATCH_TARGET = 'AdHocAssessmentBatchTarget';
    const AD_HOC_ASSESSMENT_BATCH_TARGET_SUBJECT = 'AdHocAssessmentBatchTargetSubject';
    const AD_HOC_ASSESSMENT_CATEGORY = 'AdHocAssessmentCategory';
    const ALERT = 'Alert';
    const ALERT_RULE = 'AlertRule';
    const ALERT_RULE_RECIPIENT = 'AlertRuleRecipient';
    const ALERT_RULE_CONDITION = 'AlertRuleCondition';
    const ALERT_RECIPIENT = 'AlertRecipient';
    const ALLOWANCE = 'Allowance';
    const ALLOWANCE_AMOUNT = 'AllowanceAmount';
    const APPLICATION = 'Application';
    const APPLICATION_APPEAL = 'ApplicationAppeal';
    const APPLICATION_SETTING = 'ApplicationSetting';
    const APPLICATION_WITHDRAWAL_REASON = 'ApplicationWithdrawalReason';
    const APPRAISAL = 'Appraisal';
    const ASSESSMENT = 'Assessment';
    const ASSESSMENT_ASPECT = 'AssessmentAspect';
    const ASSESSMENT_GRADE_SET = 'AssessmentGradeSet';
    const ASSESSMENT_FRAMEWORK_ASSESSMENT = 'AssessmentFrameworkAssessment';
    const ASSESSMENT_STUDENT_GROUP = 'AssessmentStudentGroup';
    const ASSESSMENT_MARK_NON_SUBMISSION_REASON = 'AssessmentMarkNonSubmissionReason';
    const ACADEMIC_YEAR_ASSESSMENT = 'AcademicYearAssessment';
    const ASSESSMENT_DATA_COLLECTION = 'AssessmentDataCollection';
    const ASSESSMENT_DATA_COLLECTION_ITEM = 'AssessmentDataCollectionItem';
    const ASSESSMENT_METRIC = 'AssessmentMetric';
    const ASSESSMENT_METRIC_ASSESSMENT = 'AssessmentMetricAssessment';
    const ASSESSMENT_METRIC_RULE = 'AssessmentMetricRule';
    const ASSESSMENT_METRIC_RULE_STUDENT_GROUP = 'AssessmentMetricRuleStudentGroup';
    const ASSESSMENT_METRIC_RULE_GRADE_ITEM = 'AssessmentMetricRuleGradeItem';
    const ASSESSMENT_METRIC_RULE_TARGET_ITEM = 'AssessmentMetricRuleTargetItem';
    const ASSESSMENT_METRIC_SET = 'AssessmentMetricSet';
    const ASSESSMENT_METRIC_ASSESSMENT_BATCH = 'AssessmentMetricAssessmentBatch';
    const ASSESSMENT_DERIVATION = 'AssessmentDerivation';
    const ASSESSMENT_DERIVATION_DEPENDANT = 'AssessmentDerivationDependant';
    const ASSESSMENT_PROVIDER = 'AssessmentProvider';
    const ASSESSMENT_IMPORT_COLUMN = 'AssessmentImportColumn';
    const ASSESSMENT_IMPORT_ROW = 'AssessmentImportRow';
    const ASSESSMENT_IMPORT_ITEM = 'AssessmentImportItem';
    const ASSESSMENT_IMPORT_ERROR = 'AssessmentImportError';
    const ATTAINMENT_GROUP = 'AttainmentGroup';
    const ATTENDANCE_FOLLOW_UP = 'AttendanceFollowUp';
    const ATTENDANCE_MARK = 'AttendanceMark';
    const ATTENDANCE_RECORD = 'AttendanceRecord';
    const ATTENDANCE_ROLL_CALL = 'AttendanceRollCall';
    const ATTENDANCE_ROLL_CALL_TIME = 'AttendanceRollCallTime';
    const ATTENDANCE_ROLL_CALL_RECORD = 'AttendanceRollCallRecord';
    const ATTENDANCE_REGISTER = 'AttendanceRegister';
    const ATTENDANCE_REGISTER_TYPE = 'AttendanceRegisterType';
    const ATTENDANCE_REGISTER_TYPE_MARK = 'AttendanceRegisterTypeMark';
    const ATTENDANCE_PATTERN = 'AttendancePattern';
    const ATTENDANCE_PATTERN_PERIOD = 'AttendancePatternPeriod';
    const AWARDING_ORGANIZATION = 'AwardingOrganization';
    const BANK_DETAIL = 'BankDetail';
    const BASKET = 'Basket';
    const BASKET_ITEM = 'BasketItem';
    const BASKET_ITEM_PAYMENT_DATA = 'BasketItemPaymentData';
    const BEHAVIOUR = 'Behaviour';
    const BEHAVIOUR_FOLLOW_UP = 'BehaviourFollowUp';
    const BEHAVIOUR_LOCATION = 'BehaviourLocation';
    const BEHAVIOUR_TIME = 'BehaviourTime';
    const BEHAVIOURAL_CONTRACT = 'BehaviouralContract';
    const BEHAVIOURAL_CONTRACT_GOAL = 'BehaviouralContractGoal';
    const BEHAVIOURAL_CONTRACT_PARTY = 'BehaviouralContractParty';
    const BEHAVIOURAL_CONTRACT_PERIOD = 'BehaviouralContractPeriod';
    const BEHAVIOURAL_INCIDENT_ACTION = 'BehaviouralIncidentAction';
    const BEHAVIOURAL_INCIDENT = 'BehaviouralIncident';
    const BEHAVIOURAL_INCIDENT_BEHAVIOUR = 'BehaviouralIncidentBehaviour';
    const BEHAVIOURAL_INCIDENT_STAFF_INVOLVEMENT = 'BehaviouralIncidentStaffInvolvement';
    const BEHAVIOURAL_INCIDENT_STUDENT_INVOLVEMENT = 'BehaviouralIncidentStudentInvolvement';
    const BEHAVIOURAL_INCIDENT_WITNESS = 'BehaviouralIncidentWitness';
    const BEHAVIOURAL_NOTE = 'BehaviouralNote';
    const PHYSICAL_INTERVENTION_TECHNIQUE = 'PhysicalInterventionTechnique';
    const PHYSICAL_INTERVENTION_RECORD = 'PhysicalInterventionRecord';
    const PHYSICAL_INTERVENTION_RECORD_TECHNIQUE = 'PhysicalInterventionRecordTechnique';
    const PHYSICAL_INTERVENTION_RECORD_WITNESS = 'PhysicalInterventionRecordWitness';
    const BOARDING_PATTERN = 'BoardingPattern';
    const BOARDING_STATUS = 'BoardingStatus';
    const BOOKABLE_RESOURCE_PERIOD = 'BookableResourcePeriod';
    const BUSINESS_ROLE = 'BusinessRole';
    const BUSINESS_ROLE_ASSIGNMENT = 'BusinessRoleAssignment';
    const BUSINESS_ROLE_DEFAULT_USER_ROLE = 'BusinessRoleDefaultUserRole';
    const CALENDAR = 'Calendar';
    const CALENDAR_ENTRY_MAPPING = 'CalendarEntryMapping';
    const CALENDAR_ENTRY_REMINDER = 'CalendarEntryReminder';
    const CALENDAR_TYPE = 'CalendarType';
    const CANDIDATE = 'Candidate';
    const CANDIDATE_ASSESSABLE_ENTRY = 'CandidateAssessableEntry';
    const CANDIDATE_ENROLMENT = 'CandidateEnrolment';
    const CANDIDATE_ENTRY = 'CandidateEntry';
    const CANDIDATE_ENTRY_AUDIT = 'CandidateEntryAudit';
    const CANDIDATE_ENTRY_PROPOSAL = 'CandidateEntryProposal';
    const CANDIDATE_ENTRY_WITHDRAWAL_PROPOSAL = 'CandidateEntryWithdrawalProposal';
    const CANDIDATE_PROPOSAL = 'CandidateProposal';
    const CANDIDATE_PROPOSAL_COMMENT = 'CandidateProposalComment';
    const CANDIDATE_REGISTRATION = 'CandidateRegistration';
    const CANDIDATE_REGISTRATION_AUDIT = 'CandidateRegistrationAudit';
    const CANDIDATE_REGISTRATION_PROPOSAL = 'CandidateRegistrationProposal';
    const CANDIDATE_REGISTRATION_WITHDRAWAL_PROPOSAL = 'CandidateRegistrationWithdrawalProposal';
    const CHECK_TYPE = 'CheckType';
    const CHECK_CLEARANCE_LEVEL = 'CheckClearanceLevel';
    const CHILD_PROTECTION_NOTE = 'ChildProtectionNote';
    const CHILD_PROTECTION_STATUS = 'ChildProtectionStatus';
    const CHILD_PROTECTION_STATUS_ASSIGNMENT = 'ChildProtectionStatusAssignment';
    const CLUB = 'Club';
    const CLUB_ELIGIBILITY = 'ClubEligibility';
    const CLUB_LEAD = 'ClubLead';
    const CLUB_MEMBERSHIP = 'ClubMembership';
    const CLUB_MEMBERSHIP_PERIOD = 'ClubMembershipPeriod';
    const CLUB_MEMBERSHIP_PERIOD_PRICE = 'ClubMembershipPeriodPrice';
    const CLUB_SESSION = 'ClubSession';
    const COMPANY = 'Company';
    const COMPANY_STAFF = 'CompanyStaff';
    const COMMUNICATION_ACTION = 'CommunicationAction';
    const COMMUNICATION_TAG = 'CommunicationTag';
    const COMMUNICATION_TEMPLATE = 'CommunicationTemplate';
    const CONSENT = 'Consent';
    const CONSENT_TYPE = 'ConsentType';
    const CONTENT = 'Content';
    const CONTENT_TAG = 'ContentTag';
    const COURT_ORDER = 'CourtOrder';
    const COVER_ARRANGEMENT = 'CoverArrangement';
    const COVER_REQUIREMENT = 'CoverRequirement';
    const COUNTRY = 'Country';
    const COURT_ORDER_PARTY = 'CourtOrderParty';
    const CUSTOM_GROUP = 'CustomGroup';
    const CUSTOM_GROUP_MEMBERSHIP = 'CustomGroupMembership';
    const CUSTOM_GROUP_MEMBERSHIP_CRITERION = 'CustomGroupMembershipCriterion';
    const CUSTOM_REPORT = 'CustomReport';
    const CUSTOM_REPORT_COLUMN = 'CustomReportColumn';
    const CUSTOM_REPORT_GROUPING = 'CustomReportGrouping';
    const CUSTOM_REPORT_ORDERING = 'CustomReportOrdering';
    const CUSTOM_REPORT_POST_GROUPING_FILTER = 'CustomReportPostGroupingFilter';
    const CUSTOM_REPORT_SCOPE = 'CustomReportScope';
    const CUSTOM_REPORT_SCOPE_FILTER = 'CustomReportScopeFilter';
    const CUSTOM_REPORT_SCHEDULED_EXPORT = 'CustomReportScheduledExport';
    const CUSTOM_REPORT_SCHEDULED_EXPORT_REPORT = 'CustomReportScheduledExportReport';
    const CUSTOM_REPORT_SCHEDULED_EXPORT_RECIPIENT = 'CustomReportScheduledExportRecipient';
    const CUSTOM_REPORT_SHARE = 'CustomReportShare';
    const CUSTOM_REPORT_EMAIL_LOG = 'CustomReportEmailLog';
    const CURRICULUM = 'Curriculum';
    const CURRICULUM_GRADE = 'CurriculumGrade';
    const CURRICULUM_STATEMENT = 'CurriculumStatement';
    const CURRICULUM_STATEMENT_BAND = 'CurriculumStatementBand';
    const CURRICULUM_SECTION = 'CurriculumSection';
    const CURRICULUM_TIER = 'CurriculumTier';
    const CURRICULUM_TARGET = 'CurriculumTarget';
    const CURRICULUM_TARGET_SET = 'CurriculumTargetSet';
    const DATA_EXPORT = 'DataExport';
    const DATA_SET_SUBSCRIPTION = 'DataSetSubscription';
    const DATA_SOURCE = 'DataSource';
    const DEMOGRAPHIC = 'Demographic';
    const DETENTION = 'Detention';
    const DETENTION_SESSION = 'DetentionSession';
    const DETENTION_TYPE = 'DetentionType';
    const DEPARTMENT = 'Department';
    const FACULTY_DEPARTMENT = 'FacultyDepartment';
    const DEPARTMENT_MEMBERSHIP = 'DepartmentMembership';
    const DEPARTMENT_RESPONSIBILITY = 'DepartmentResponsibility';
    const DEPARTMENT_RESPONSIBILITY_TYPE = 'DepartmentResponsibilityType';
    const DIETARY_REQUIREMENT = 'DietaryRequirement';
    const DIETARY_REQUIREMENT_TYPE = 'DietaryRequirementType';
    const DOCUMENT_LAYOUT = 'DocumentLayout';
    const EDUCATIONAL_INSTITUTION_ENROLMENT = 'EducationalInstitutionEnrolment';
    const EDUCATION_PLAN = 'EducationPlan';
    const EDUCATION_PLAN_CONTRIBUTOR = 'EducationPlanContributor';
    const EDUCATIONAL_INSTITUTION = 'EducationalInstitution';
    const EDUCATIONAL_INSTITUTION_STAFF = 'EducationalInstitutionStaff';
    const ELIGIBILITY = 'Eligibility';
    const ELIGIBILITY_RECORD = 'EligibilityRecord';
    const EMAIL = 'Email';
    const EMAIL_ACCOUNT = 'EmailAccount';
    const EMAIL_ACCOUNT_ACCESS_PERMISSION = 'EmailAccountAccessPermission';
    const EMAIL_ADDRESS = 'EmailAddress';
    const EMAIL_DRAFT = 'EmailDraft';
    const EMAIL_PART = 'EmailPart';
    const EMAIL_PERMITTED_SENDER = 'EmailPermittedSender';
    const EMAIL_SENDER = 'EmailSender';
    const EMAIL_STATUS = 'EmailStatus';
    const EMAIL_RECIPIENT = 'EmailRecipient';
    const EMAIL_REFERENCE = 'EmailReference';
    const EMPLOYER = 'Employer';
    const EMPLOYMENT_RECORD_TYPE = 'EmploymentRecordType';
    const ENROLMENT_MODE = 'EnrolmentMode';
    const ENROLMENT_MODE_ASSIGNMENT = 'EnrolmentModeAssignment';
    const ENABLED_FEATURE = 'EnabledFeature';
    const ETHNICITY = 'Ethnicity';
    const ETHNICITY_CATEGORY = 'EthnicityCategory';
    const EVENT_PARTICIPANT = 'EventParticipant';
    const EVENT_PARTICIPANT_INVITATION = 'EventParticipantInvitation';
    const EXCLUSION_REASON = 'ExclusionReason';
    const EXCLUSION_EXCLUSION_REASON = 'ExclusionExclusionReason';
    const EXCLUSION_REVIEW = 'ExclusionReview';
    const EXCLUSION_REVIEW_OUTCOME = 'ExclusionReviewOutcome';
    const EXTERNAL_ADMINISTRATOR = 'ExternalAdministrator';
    const VISION_TEST = 'VisionTest';
    const FACULTY = 'Faculty';
    const FACULTY_MEMBER = 'FacultyMember';
    const FACULTY_MEMBERSHIP = 'FacultyMembership';
    const FACULTY_RESPONSIBILITY = 'FacultyResponsibility';
    const FACULTY_RESPONSIBILITY_TYPE = 'FacultyResponsibilityType';
    const FILE = 'File';
    const FINAL_ASSESSMENT_TARGET = 'FinalAssessmentTarget';
    const GENDER = 'Gender';
    const GRADE = 'Grade';
    const GRADE_SET = 'GradeSet';
    const GRADE_POINT_SCALE = 'GradePointScale';
    const GRADE_POINT_SCALE_LEVEL_GRADE_SET = 'GradePointScaleLevelGradeSet';
    const GUARDIAN = 'Guardian';
    const GUARDIAN_CONSULTATION = 'GuardianConsultation';
    const GUARDIAN_RELATIONSHIP_TYPE = 'GuardianRelationshipType';
    const HEARING_TEST = 'HearingTest';
    const HOUSE = 'House';
    const HOUSE_MEMBERSHIP = 'HouseMembership';
    const HOUSE_TUTOR = 'HouseTutor';
    const IDENTIFICATION_DOCUMENT_TYPE = 'IdentificationDocumentType';
    const IDENTITY_CARD = 'IdentityCard';
    const IDENTITY_CARD_READER = 'IdentityCardReader';
    const IMMUNIZATION_TYPE = 'ImmunizationType';
    const IMMUNIZATION = 'Immunization';
    const IMPAIRMENT_CATEGORY = 'ImpairmentCategory';
    const IN_APP_MESSAGE_PERMITTED_SENDER = 'InAppMessagePermittedSender';
    const IN_APP_MESSAGE_NOTIFICATION = 'InAppMessageNotification';
    const INBOUND_IN_APP_MESSAGE = 'InboundInAppMessage';
    const INBOUND_SMS_MESSAGE = 'InboundSmsMessage';
    const INBOUND_NOTIFICATION_AUTOMATIC_RECIPIENT = 'InboundNotificationAutomaticRecipient';
    const INTAKE_SEASON = 'IntakeSeason';
    const INTAKE_SEASON_APPLICANT_BUCKET = 'IntakeSeasonApplicantBucket';
    const INTAKE_SEASON_GROUP = 'IntakeSeasonGroup';
    const INTERVENTION = 'Intervention';
    const INTERVENTION_CATEGORY = 'InterventionCategory';
    const INTERVENTION_DEFINITION = 'InterventionDefinition';
    const INTERVENTION_GROUP = 'InterventionGroup';
    const INTERVENTION_REVIEW = 'InterventionReview';
    const INTERVENTION_SESSION = 'InterventionSession';
    const INTERVENTION_STAFF_COST = 'InterventionStaffCost';
    const INTERVENTION_COST = 'InterventionCost';
    const INTERVENTION_FUNDING_SOURCE = 'InterventionFundingSource';
    const INTERVENTION_FUNDING = 'InterventionFunding';
    const INTERVENTION_PLANNED_STAFF = 'InterventionPlannedStaff';
    const INTERVENTION_FILTER = 'InterventionFilter';
    const INTERNAL_EXCLUSION_TYPE = 'InternalExclusionType';
    const INTERNAL_EXCLUSION_REASON = 'InternalExclusionReason';
    const INTERNAL_EXCLUSION_SESSION = 'InternalExclusionSession';
    const INTERNAL_EXCLUSION = 'InternalExclusion';
    const STUDENT_INTERVENTION_GOAL = 'StudentInterventionGoal';
    const IN_CARE_NOTE = 'InCareNote';
    const IN_CARE_STATUS = 'InCareStatus';
    const IN_CARE_STATUS_ASSIGNMENT = 'InCareStatusAssignment';
    const INSTITUTION_TYPE = 'InstitutionType';
    const INVERSE_DEMOGRAPHIC = 'InverseDemographic';
    const INVIGILATION_DUTY = 'InvigilationDuty';
    const INVIGILATION_SESSION = 'InvigilationSession';
    const ITEM_UNIT = 'ItemUnit';
    const KPI = 'Kpi';
    const KPI_VALUE = 'KpiValue';
    const KPI_TARGET = 'KpiTarget';
    const KPI_RANGE = 'KpiRange';
    const LANGUAGE_ABILITY = 'LanguageAbility';
    const LANGUAGE = 'Language';
    const LETTER = 'Letter';
    const LESSON_PLAN = 'LessonPlan';
    const LESSON_PLAN_OBJECTIVE = 'LessonPlanObjective';
    const LESSON_PLAN_SECTION = 'LessonPlanSection';
    const LESSON_PLAN_SECTION_ITEM = 'LessonPlanSectionItem';
    const LEARNING_MATERIAL = 'LearningMaterial';
    const LEARNING_MATERIAL_FOLDER = 'LearningMaterialFolder';
    const LOCAL_AUTHORITY = 'LocalAuthority';
    const MARITAL_STATUS = 'MaritalStatus';
    const MARK_APPROVAL = 'MarkApproval';
    const MEAL = 'Meal';
    const MEAL_PATTERN = 'MealPattern';
    const MEAL_CHOICE = 'MealChoice';
    const MEAL_PROVISION = 'MealProvision';
    const MEAL_SESSION = 'MealSession';
    const MEAL_SESSION_REGISTER_RECORD = 'MealSessionRegisterRecord';
    const MEAL_SITTING = 'MealSitting';
    const MEAL_SITTING_AUTOMATIC_ATTENDEE_TARGET = 'MealSittingAutomaticAttendeeTarget';
    const MEDICAL_CONDITION = 'MedicalCondition';
    const MEDICAL_CONDITION_MEDICATION = 'MedicalConditionMedication';
    const MEDICATION = 'Medication';
    const MEDICAL_CONDITION_TYPE = 'MedicalConditionType';
    const MEDICAL_EVENT = 'MedicalEvent';
    const MEDICAL_EVENT_TYPE = 'MedicalEventType';
    const MEDICAL_INSTITUTION = 'MedicalInstitution';
    const MEDICAL_INSTITUTION_STAFF = 'MedicalInstitutionStaff';
    const MEDICAL_PLAN = 'MedicalPlan';
    const MEDICAL_RELATIONSHIP_TYPE = 'MedicalRelationshipType';
    const MEETING = 'Meeting';
    const MEETING_NOTE = 'MeetingNote';
    const MEETING_TOPIC = 'MeetingTopic';
    const MESSAGE_DRAFT_RECIPIENT = 'MessageDraftRecipient';
    const MOTOR_VEHICLE = 'MotorVehicle';
    const MOTOR_VEHICLE_MAKE = 'MotorVehicleMake';
    const NATIONALITY_STATUS = 'NationalityStatus';
    const NEW_REPORT_CARD_BATCH = 'NewReportCardBatch';
    const NEW_REPORT_CARD_BATCH_TARGET = 'NewReportCardBatchTarget';
    const NEW_REPORT_CARD_TEMPLATE = 'NewReportCardTemplate';
    const NEW_STUDENT_REPORT_CARD = 'NewStudentReportCard';
    const NEW_STUDENT_REPORT_CARD_SECTION = 'NewStudentReportCardSection';
    const NEW_REPORT_CARD_TEXT = 'NewReportCardText';
    const NEXT_OF_KIN_RELATIONSHIP = 'NextOfKinRelationship';
    const NEW_USER_REQUEST = 'NewUserRequest';
    const NOTE = 'Note';
    const NOTICE = 'Notice';
    const OUTBOUND_LETTER = 'OutboundLetter';
    const OUTBOUND_LETTER_RECIPIENT = 'OutboundLetterRecipient';
    const OUTBOUND_LETTER_PERMITTED_SENDER = 'OutboundLetterPermittedSender';
    const OUTBOUND_IN_APP_MESSAGE = 'OutboundInAppMessage';
    const OUTBOUND_IN_APP_MESSAGE_DRAFT = 'OutboundInAppMessageDraft';
    const PERSON = 'Person';
    const PASTORAL_NOTE = 'PastoralNote';
    const PAY_SCALE = 'PayScale';
    const PAY_SCALE_GRADE = 'PayScaleGrade';
    const PAY_SCALE_GRADE_SPINAL_POINT = 'PayScaleGradeSpinalPoint';
    const PAY_SCALE_SPINAL_POINT = 'PayScaleSpinalPoint';
    const PAY_SCALE_SPINAL_POINT_VALUE = 'PayScaleSpinalPointValue';
    const INSIGHT_REPORT = 'InsightReport';
    const PERMANENT_EXCLUSION = 'PermanentExclusion';
    const PERSON_CHECK = 'PersonCheck';
    const PERSON_FORMER_NAME = 'PersonFormerName';
    const PERSON_IDENTIFICATION_DOCUMENT = 'PersonIdentificationDocument';
    const PERSON_IMPAIRMENT = 'PersonImpairment';
    const PERSON_NATIONALITY = 'PersonNationality';
    const PERSON_NEXT_OF_KIN = 'PersonNextOfKin';
    const USER_DEFINED_RECORD = 'UserDefinedRecord';
    const USER_DEFINED_FIELD = 'UserDefinedField';
    const PERSON_PROFESSIONAL_QUALIFICATION = 'PersonProfessionalQualification';
    const PERSON_TRAINING_COURSE = 'PersonTrainingCourse';
    const PERSON_TRANSPORTATION_METHOD = 'PersonTransportationMethod';
    const PHANTOM_MODEL = 'PhantomModel';
    const POINT_AWARD = 'PointAward';
    const POINT_AWARD_CATEGORY = 'PointAwardCategory';
    const POINT_AWARD_SCALE = 'PointAwardScale';
    const POSITION = 'Position';
    const POSITION_BUSINESS_ROLE = 'PositionBusinessRole';
    const POSTAL_ADDRESS_OCCUPANCY = 'PostalAddressOccupancy';
    const POSTAL_ADDRESS = 'PostalAddress';
    const PREDICTED_ASSESSMENT_MARK = 'PredictedAssessmentMark';
    const PROFESSIONAL_QUALIFICATION_CLASS = 'ProfessionalQualificationClass';
    const PROFESSIONAL_QUALIFICATION_SUBJECT = 'ProfessionalQualificationSubject';
    const PROFESSIONAL_QUALIFICATION_TYPE = 'ProfessionalQualificationType';
    const PROGRAMME = 'Programme';
    const PROGRAMME_ACADEMIC_UNIT = 'ProgrammeAcademicUnit';
    const PROGRAMME_ENROLMENT = 'ProgrammeEnrolment';
    const PROGRAMME_INSTANCE = 'ProgrammeInstance';
    const PROGRAMME_CLASSIFICATION = 'ProgrammeClassification';
    const PROGRAMME_QUALIFICATION_AWARD = 'ProgrammeQualificationAward';
    const PROGRAMME_LEAD = 'ProgrammeLead';
    const PROGRAMME_WITHDRAWAL_REASON = 'ProgrammeWithdrawalReason';
    const PROGRESS_GOAL_TYPE = 'ProgressGoalType';
    const PROGRESS_ASSESSMENT_BATCH = 'ProgressAssessmentBatch';
    const PROGRESS_ASSESSMENT_BATCH_MEASUREMENT_PERIOD = 'ProgressAssessmentBatchMeasurementPeriod';
    const PROGRESS_ASSESSMENT_BATCH_TARGET = 'ProgressAssessmentBatchTarget';
    const PROGRESS_ASSESSMENT_BATCH_TARGET_MEASUREMENT_PERIOD = 'ProgressAssessmentBatchTargetMeasurementPeriod';
    const PROGRESS_MEASUREMENT_PERIOD = 'ProgressMeasurementPeriod';
    const PROGRESS_MEASUREMENT_PERIOD_SET = 'ProgressMeasurementPeriodSet';
    const PUSH_NOTIFICATION_TOKEN = 'PushNotificationToken';
    const QUALIFICATION_ASPECT = 'QualificationAspect';
    const QUALIFICATION_AVAILABILITY_INSTANCE = 'QualificationAvailabilityInstance';
    const QUALIFICATION_AWARD = 'QualificationAward';
    const QUALIFICATION_AWARD_DISCOUNT_CODE = 'QualificationAwardDiscountCode';
    const QUALIFICATION_AWARD_LEARNING_UNIT = 'QualificationAwardLearningUnit';
    const QUALIFICATION_AWARD_SUBTYPE = 'QualificationAwardSubtype';
    const QUALIFICATION_AWARD_TYPE = 'QualificationAwardType';
    const QUALIFICATION_ASSESSABLE = 'QualificationAssessable';
    const QUALIFICATION_ASSESSABLE_INSTANCE = 'QualificationAssessableInstance';
    const QUALIFICATION_CENTER_ASSESSED_OUTCOME = 'QualificationCenterAssessedOutcome';
    const QUALIFICATION_ELEMENT_AVAILABILITY = 'QualificationElementAvailability';
    const QUALIFICATION_ELEMENT_DISALLOWED_COMBINATION = 'QualificationElementDisallowedCombination';
    const QUALIFICATION_TIMETABLE_SESSION_TYPE = 'QualificationTimetableSessionType';
    const QUALIFICATION_FORECAST_RESULT = 'QualificationForecastResult';
    const QUALIFICATION_GRADE = 'QualificationGrade';
    const QUALIFICATION_GRADE_SET = 'QualificationGradeSet';
    const QUALIFICATION_LEARNING_UNIT = 'QualificationLearningUnit';
    const QUALIFICATION_LEARNING_UNIT_ASSESSABLE = 'QualificationLearningUnitAssessable';
    const QUALIFICATION_LEARNING_UNIT_LEVEL = 'QualificationLearningUnitLevel';
    const QUALIFICATION_OFFERING = 'QualificationOffering';
    const QUALIFICATION_RESULT = 'QualificationResult';
    const QUALIFICATION_SCHEME = 'QualificationScheme';
    const QUALIFICATION_STUDY_GUIDE = 'QualificationStudyGuide';
    const QUALIFICATION_SUBJECT = 'QualificationSubject';
    const QUALIFICATION_SUBSCRIPTION = 'QualificationSubscription';
    const QUALIFICATION_RESULT_EMBARGO_VIEWER = 'QualificationResultEmbargoViewer';
    const IN_HOUSE_CANDIDATE_ACCESS_ARRANGEMENT = 'InHouseCandidateAccessArrangement';
    const IN_HOUSE_CANDIDATE = 'InHouseCandidate';
    const IN_HOUSE_EXAM_ENTRY = 'InHouseExamEntry';
    const IN_HOUSE_EXAM_GRADE = 'InHouseExamGrade';
    const IN_HOUSE_EXAM_INSTANCE = 'InHouseExamInstance';
    const IN_HOUSE_EXAM_RESULT = 'InHouseExamResult';
    const IN_HOUSE_EXAM = 'InHouseExam';
    const IN_HOUSE_EXAM_INSTANCE_ACADEMIC_UNIT_LINK = 'InHouseExamInstanceAcademicUnitLink';
    const REGION = 'Region';
    const REGISTRATION_FORM = 'RegistrationForm';
    const REGISTRATION_FORM_MEMBERSHIP = 'RegistrationFormMembership';
    const REGISTRATION_FORM_TUTOR = 'RegistrationFormTutor';
    const RELIGION = 'Religion';
    const REPEATING_SCHOOL_EVENT = 'RepeatingSchoolEvent';
    const REPEATING_SCHOOL_EVENT_PARTICIPANT = 'RepeatingSchoolEventParticipant';
    const REPORT_CARD_BATCH_CURRICULUM = 'ReportCardBatchCurriculum';
    const REPORT_CARD_BATCH_PROGRESS_ASSESSMENT = 'ReportCardBatchProgressAssessment';
    const REPORT_CARD_BATCH_ACADEMIC_UNIT = 'ReportCardBatchAcademicUnit';
    const REPORT_CARD_BATCH_AD_HOC_ASSESSMENT = 'ReportCardBatchAdHocAssessment';
    const REPORT_SUBSCRIPTION = 'ReportSubscription';
    const ROOM_ASSET = 'RoomAsset';
    const ROOM_UNAVAILABILITY = 'RoomUnavailability';
    const ROOM_CHANGE_REQUIREMENT = 'RoomChangeRequirement';
    const ROOM_ROOM_ASSET = 'RoomRoomAsset';
    const ROOM_FEATURE = 'RoomFeature';
    const ROOM_LAYOUT = 'RoomLayout';
    const ROOM_LAYOUT_SEAT = 'RoomLayoutSeat';
    const ROOM_ROOM_FEATURE = 'RoomRoomFeature';
    const ROOM = 'Room';
    const SAFEGUARDING_NOTE = 'SafeguardingNote';
    const SCHOOL_EVENT = 'SchoolEvent';
    const SCHOOL_EVENT_TYPE = 'SchoolEventType';
    const ACADEMIC_YEAR_ENROLMENT = 'AcademicYearEnrolment';
    const SCHOOL_PHASE = 'SchoolPhase';
    const SCHOOL_PROGRESS_TARGET_RULE = 'SchoolProgressTargetRule';
    const SCHOOLWORK = 'Schoolwork';
    const SCHOOLWORK_ASPECT = 'SchoolworkAspect';
    const SENDING_PROFILE = 'SendingProfile';
    const SEN_EVENT_OUTCOME = 'SenEventOutcome';
    const SEN_EVENT_OUTCOME_TYPE = 'SenEventOutcomeType';
    const SEN_EVENT = 'SenEvent';
    const SEN_EVENT_TYPE = 'SenEventType';
    const SEN_NEED = 'SenNeed';
    const SEN_NEED_TYPE = 'SenNeedType';
    const SEN_NOTE = 'SenNote';
    const SEN_STATEMENT = 'SenStatement';
    const SEN_STATUS = 'SenStatus';
    const SEN_STATUS_ASSIGNMENT = 'SenStatusAssignment';
    const SESSION = 'Session';
    const SESSION_ROOM_ASSET_REQUIREMENT = 'SessionRoomAssetRequirement';
    const SESSION_ROOM_FEATURE_REQUIREMENT = 'SessionRoomFeatureRequirement';
    const SITE = 'Site';
    const SITE_OPERATING_PERIOD = 'SiteOperatingPeriod';
    const SITE_OPERATING_PERIOD_EXCEPTION = 'SiteOperatingPeriodException';
    const SITE_TRAVEL_TIME = 'SiteTravelTime';
    const SMS_MESSAGE = 'SmsMessage';
    const SMS_MESSAGE_DRAFT = 'SmsMessageDraft';
    const SMS_MESSAGE_PART = 'SmsMessagePart';
    const SMS_MESSAGE_PERMITTED_SENDER = 'SmsMessagePermittedSender';
    const SMS_MESSAGE_STATUS = 'SmsMessageStatus';
    const SNIPPET = 'Snippet';
    const STAFF_ABSENCE = 'StaffAbsence';
    const STAFF_ABSENCE_CATEGORY = 'StaffAbsenceCategory';
    const STAFF_ABSENCE_SICKNESS_CATEGORY = 'StaffAbsenceSicknessCategory';
    const STAFF_ABSENCE_SICKNESS_SUBCATEGORY = 'StaffAbsenceSicknessSubcategory';
    const STAFF_ATTENDANCE_MARK = 'StaffAttendanceMark';
    const STAFF_ATTENDANCE_RECORD = 'StaffAttendanceRecord';
    const STAFF_CONTRACT = 'StaffContract';
    const STAFF_CONTRACT_POST = 'StaffContractPost';
    const STAFF_CONTRACT_POST_ALLOWANCE = 'StaffContractPostAllowance';
    const STAFF_CONTRACT_POST_SALARY = 'StaffContractPostSalary';
    const STAFF_CONTRACT_POST_ADDITIONAL_PAYMENT = 'StaffContractPostAdditionalPayment';
    const STAFF_CONTRACT_POST_RATE = 'StaffContractPostRate';
    const STAFF_CONTRACT_POST_START_REASON = 'StaffContractPostStartReason';
    const STAFF_CONTRACT_POST_END_REASON = 'StaffContractPostEndReason';
    const STAFF_OBJECTIVE = 'StaffObjective';
    const STAFF_ORIGIN = 'StaffOrigin';
    const STAFF_DESTINATION = 'StaffDestination';
    const STAFF_EMPLOYMENT_TYPE = 'StaffEmploymentType';
    const STAFF = 'Staff';
    const STAFF_ROOM_FEATURE_REQUIREMENT = 'StaffRoomFeatureRequirement';
    const STAFF_WORKING_PERIOD = 'StaffWorkingPeriod';
    const STANDARDIZED_ASSESSMENT = 'StandardizedAssessment';
    const STANDARDIZED_ASSESSMENT_BATCH = 'StandardizedAssessmentBatch';
    const STANDARDIZED_ASSESSMENT_BATCH_TARGET = 'StandardizedAssessmentBatchTarget';
    const STANDARDIZED_ASSESSMENT_THRESHOLD = 'StandardizedAssessmentThreshold';
    const STANDARDIZED_ASSESSMENT_THRESHOLD_RESULT = 'StandardizedAssessmentThresholdResult';
    const STANDARDIZED_ASSESSMENT_TEMPLATE = 'StandardizedAssessmentTemplate';
    const STANDARDIZED_ASSESSMENT_TEMPLATE_ASSESSMENT = 'StandardizedAssessmentTemplateAssessment';
    const STANDARDIZED_ASSESSMENT_SUITE = 'StandardizedAssessmentSuite';
    const STANDARDIZED_ASSESSMENT_COMPONENT = 'StandardizedAssessmentComponent';
    const STANDARDIZED_ASSESSMENT_ASPECT_CATEGORY = 'StandardizedAssessmentAspectCategory';
    const STANDARDIZED_ASSESSMENT_ASPECT = 'StandardizedAssessmentAspect';
    const STANDARDIZED_ASSESSMENT_MARK = 'StandardizedAssessmentMark';
    const STUDENT_AD_HOC_ASSESSMENT_MARK = 'StudentAdHocAssessmentMark';
    const STUDENT_CURRICULUM_ACHIEVEMENT = 'StudentCurriculumAchievement';
    const STUDENT_CURRICULUM_EVIDENCE = 'StudentCurriculumEvidence';
    const STUDENT_CURRICULUM_SCORE = 'StudentCurriculumScore';
    const STUDENT_STANDARDIZED_ASSESSMENT = 'StudentStandardizedAssessment';
    const STUDENT_STANDARDIZED_ASSESSMENT_MARK = 'StudentStandardizedAssessmentMark';
    const STUDENT_ATTENDANCE_PATTERN = 'StudentAttendancePattern';
    const STUDENT_ABSENCE_NOTE = 'StudentAbsenceNote';
    const STUDENT_REPEATING_ABSENCE_NOTE = 'StudentRepeatingAbsenceNote';
    const STUDENT_DESTINATION = 'StudentDestination';
    const STUDENT_DESTINATION_TYPE = 'StudentDestinationType';
    const STUDENT_EDUCATIONAL_HISTORY = 'StudentEducationalHistory';
    const STUDENT_GIFT = 'StudentGift';
    const STUDENT_TALENT = 'StudentTalent';
    const STUDENT_GUARDIAN_RELATIONSHIP = 'StudentGuardianRelationship';
    const STUDENT_FUNDING = 'StudentFunding';
    const STUDENT_FUNDING_TYPE = 'StudentFundingType';
    const STUDENT_INTERVENTION = 'StudentIntervention';
    const STUDENT_INTERVENTION_REVIEW = 'StudentInterventionReview';
    const STUDENT_LINKED_RELATIONSHIP = 'StudentLinkedRelationship';
    const STUDENT_LINKED_RELATIONSHIP_TYPE = 'StudentLinkedRelationshipType';
    const STUDENT_MEDICAL_RELATIONSHIP = 'StudentMedicalRelationship';
    const STUDENT_OTHER_SCHOOL_ATTENDANCE_RECORD = 'StudentOtherSchoolAttendanceRecord';
    const STUDENT_PROGRESS_ASSESSMENT_MARK = 'StudentProgressAssessmentMark';
    const STUDENT_PROGRESS_BASELINE = 'StudentProgressBaseline';
    const STUDENT_PROGRESS_GOAL = 'StudentProgressGoal';
    const STUDENT_SCHOOLWORK = 'StudentSchoolwork';
    const STUDENT_SCHOOLWORK_MARK = 'StudentSchoolworkMark';
    const STUDENT = 'Student';
    const STUDENT_EMPLOYMENT_RECORD = 'StudentEmploymentRecord';
    const STUDENT_ROOM_FEATURE_REQUIREMENT = 'StudentRoomFeatureRequirement';
    const STUDENT_RECORD_CHANGE = 'StudentRecordChange';
    const SUBJECT = 'Subject';
    const SUPERANNUATION_SCHEME = 'SuperannuationScheme';
    const SUPERANNUATION_SCHEME_VALUE = 'SuperannuationSchemeValue';
    const SUSPECTED_DUPLICATE = 'SuspectedDuplicate';
    const TAG = 'Tag';
    const TAGGING = 'Tagging';
    const TALENT = 'Talent';
    const TARGET_JUDGEMENT_RULE = 'TargetJudgementRule';
    const TARGET_JUDGEMENT = 'TargetJudgement';
    const TEACHING_ASSISTANT_ALLOCATION = 'TeachingAssistantAllocation';
    const TEACHING_GROUP = 'TeachingGroup';
    const TEACHING_GROUP_MEMBERSHIP = 'TeachingGroupMembership';
    const TEACHING_GROUP_TUTOR = 'TeachingGroupTutor';
    const TELEPHONE_CALL = 'TelephoneCall';
    const TELEPHONE_NUMBER = 'TelephoneNumber';
    const FIXED_PERIOD_EXCLUSION = 'FixedPeriodExclusion';
    const TERM = 'Term';
    const THIRD_PARTY_SITE = 'ThirdPartySite';
    const THIRD_PARTY_LOGIN = 'ThirdPartyLogin';
    const TIMETABLER_IMPORT_RESULT = 'TimetablerImportResult';
    const TIMETABLER_IMPORT_RESULT_ERROR = 'TimetablerImportResultError';
    const TIMETABLER_IMPORT_RESULT_UPDATE = 'TimetablerImportResultUpdate';
    const TIMETABLER_IMPORT_STEP_OUTCOME = 'TimetablerImportStepOutcome';
    const TRIP = 'Trip';
    const TRIP_ELIGIBILITY = 'TripEligibility';
    const TRIP_LOCATION = 'TripLocation';
    const TRIP_PARTICIPANT = 'TripParticipant';
    const TRIP_PRICE = 'TripPrice';
    const TIMETABLE_SLOT = 'TimetableSlot';
    const TIMETABLE_PERIOD_GROUPING = 'TimetablePeriodGrouping';
    const TIMETABLE_PERIOD = 'TimetablePeriod';
    const TIMETABLE_SLOT_EXCEPTION = 'TimetableSlotException';
    const TIMETABLE_SLOT_LOCATION = 'TimetableSlotLocation';
    const TIMETABLE_SLOT_STAFF = 'TimetableSlotStaff';
    const TITLE = 'Title';
    const TRAINING_COURSE = 'TrainingCourse';
    const TRAINING_EVENT = 'TrainingEvent';
    const TRANSPORTATION_METHOD = 'TransportationMethod';
    const UNENROLMENT_REASON = 'UnenrolmentReason';
    const USAGE_LOG_ENTRY = 'UsageLogEntry';
    const USER = 'User';
    const USER_LOGIN = 'UserLogin';
    const USER_NOTIFICATION = 'UserNotification';
    const USER_ROLE = 'UserRole';
    const USER_ROLE_ASSIGNMENT = 'UserRoleAssignment';
    const UNIVERSITY = 'University';
    const UNIVERSITY_STAFF = 'UniversityStaff';
    const WORK_PLACEMENT = 'WorkPlacement';
    const PINNED_ITEM = 'PinnedItem';
    const BEHAVIOURAL_INCIDENT_LEVEL_WORKFLOW = 'BehaviouralIncidentLevelWorkflow';
    const BEHAVIOURAL_INCIDENT_WATCHER = 'BehaviouralIncidentWatcher';
    const BEHAVIOURAL_INCIDENT_DEFAULT_WATCHER = 'BehaviouralIncidentDefaultWatcher';
    const BEHAVIOUR_DEFAULT_WATCHER = 'BehaviourDefaultWatcher';
    const BANK = 'Bank';
    const BANK_ACCOUNT = 'BankAccount';
    const BANK_DEPOSIT = 'BankDeposit';
    const BILL_PAYER = 'BillPayer';
    const BOOK = 'Book';
    const CASH_RECEIPT = 'CashReceipt';
    const CHEQUE = 'Cheque';
    const CHEQUE_BOOK = 'ChequeBook';
    const CUSTOMER_ACCOUNT = 'CustomerAccount';
    const CUSTOMER_ACCOUNT_TYPE = 'CustomerAccountType';
    const CUSTOMER_CREDIT_NOTE = 'CustomerCreditNote';
    const CUSTOMER_CREDIT_NOTE_ITEM = 'CustomerCreditNoteItem';
    const CUSTOMER_INVOICE = 'CustomerInvoice';
    const CUSTOMER_INVOICE_ITEM = 'CustomerInvoiceItem';
    const CUSTOMER_PREPAYMENT = 'CustomerPrepayment';
    const DELIVERY_ADDRESS = 'DeliveryAddress';
    const INCOMING_BANK_TRANSACTION = 'IncomingBankTransaction';
    const INCOMING_CARD_TRANSACTION = 'IncomingCardTransaction';
    const INCOMING_DIRECT_DEBIT_TRANSACTION = 'IncomingDirectDebitTransaction';
    const INCOMING_DIRECT_DEBIT_AGREEMENT = 'IncomingDirectDebitAgreement';
    const MEAL_PRICE = 'MealPrice';
    const MEAL_PROVISION_PRICE_CATEGORY = 'MealProvisionPriceCategory';
    const MEAL_PROVISION_PRICE_CATEGORY_GROUP = 'MealProvisionPriceCategoryGroup';
    const PAYMENT_PROVIDER = 'PaymentProvider';
    const PAYMENT_PROVIDER_PAYOUT = 'PaymentProviderPayout';
    const RECEIVED_CHEQUE = 'ReceivedCheque';
    const VAT_RATE = 'VatRate';
    const CASH_PAYOUT = 'CashPayout';
    const ISSUED_CHEQUE = 'IssuedCheque';
    const CUSTOMER_ACCOUNT_REFUND = 'CustomerAccountRefund';
    const CUSTOMER_PAYMENT = 'CustomerPayment';
    const CUSTOMER_PAYMENT_REFUND = 'CustomerPaymentRefund';
    const ACADEMIC_YEAR_SETUP_TASK = 'AcademicYearSetupTask';
    const DATA_SHARING_REQUEST = 'DataSharingRequest';
    const APPLICATION_APPLICANT_IMPORT = 'ApplicationApplicantImport';
    const HOUSE_AUTOMATIC_ENROLMENT = 'HouseAutomaticEnrolment';
    const GOOGLE_PROVISIONING_SETTING = 'GoogleProvisioningSetting';
    const GOOGLE_USER = 'GoogleUser';
    const STAFF_LEAVING_REASON = 'StaffLeavingReason';
    const PROBATION = 'Probation';
    const PROBATION_REVIEW = 'ProbationReview';
    const CUSTOM_REPORT_COLLATION = 'CustomReportCollation';
    const OBSERVATION_TYPE = 'ObservationType';
    const OBSERVATION_GRADE_SET = 'ObservationGradeSet';
    const OBSERVATION_GRADE = 'ObservationGrade';
    const OBSERVATION_FRAMEWORK = 'ObservationFramework';
    const OBSERVATION_THEME = 'ObservationTheme';
    const OBSERVATION_STRAND = 'ObservationStrand';
    const OBSERVATION_FRAMEWORK_STRAND = 'ObservationFrameworkStrand';
    const OBSERVATION = 'Observation';
    const OBSERVATION_JUDGEMENT = 'ObservationJudgement';
    const OBSERVATION_TYPE_GRADE_SET = 'ObservationTypeGradeSet';
    const PERSON_BENEFIT_RECORD = 'PersonBenefitRecord';
    const BENEFIT_RECORD_TYPE = 'BenefitRecordType';
    const EMAIL_ADDRESS_IMPORT = 'EmailAddressImport';
    const USER_DEFINED_FIELD_IMPORT = 'UserDefinedFieldImport';
    const INTEGRATIONS_HR_FINANCE_PROVIDER = 'IntegrationsHrFinanceProvider';
    const STUDENT_ALERT = 'StudentAlert';
    const BURSARY_TYPE = 'BursaryType';
    const BURSARY_LEVEL = 'BursaryLevel';
    const BURSARY_LEVEL_AMOUNT = 'BursaryLevelAmount';
    const BURSARY_PAYMENT_DATE = 'BursaryPaymentDate';
    const STUDENT_BURSARY_LEVEL = 'StudentBursaryLevel';
    const BURSARY_PAYMENT = 'BursaryPayment';
    const AD_HOC_BURSARY_PAYMENT = 'AdHocBursaryPayment';
    const BURSARY_PAYMENT_AUTOMATIC_CRITERION = 'BursaryPaymentAutomaticCriterion';
    const BURSARY_PAYMENT_MANUAL_CRITERION = 'BursaryPaymentManualCriterion';
    const BURSARY_PAYMENT_MANUAL_CRITERION_STATUS = 'BursaryPaymentManualCriterionStatus';
    const ATTENDANCE_ROLL_CALL_TIME_GROUP = 'AttendanceRollCallTimeGroup';
    const SUSPENDED_CALENDAR_ENTRY_MAPPING = 'SuspendedCalendarEntryMapping';
    const COVID_TESTING_TEST = 'CovidTestingTest';
    const INTEGRATION_VLE_PROVIDER = 'IntegrationVleProvider';
}
