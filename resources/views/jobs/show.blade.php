<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Detail</title>
</head>
<body>
    <h1>{{ $job->job_title }}</h1>
    <p><strong>Company:</strong> {{ $job->company->name }}</p>
    <p><strong>Location:</strong> {{ $job->location }}</p>
    <p><strong>Remote:</strong> {{ $job->remote ? 'Yes' : 'No' }}</p>
    <p><strong>Job Type:</strong> {{ $job->job_type }}</p>
    <p><strong>Salary Range:</strong> {{ $job->salary_range }}</p>
    <p><strong>Application Deadline:</strong> {{ $job->application_deadline }}</p>
    <p><strong>Disability Friendly Accommodations:</strong> {{ $job->disability_friendly }}</p>
    <p><strong>Required Skills:</strong> {{ $job->required_skills }}</p>
    <p><strong>Supported Disability Types:</strong> {{ $job->disability_types_supported }}</p>
    <p><strong>Contact Email:</strong> {{ $job->contact_email }}</p>
    <p><strong>Job Description:</strong> {{ $job->job_description }}</p>

    <a href="{{ route('dashboard') }}">Back to Job Listings</a>
</body>
</html>
