<!-- resources/views/jobs/index.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Listings</title>
    <style>
        .filter-container {
            display: flex;
            align-items: flex-end;
            gap: 20px;
        }
        .filter-container label {
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <h1>Filter Job Listings</h1>

    <!-- Filter Form and Search Feature Side by Side -->
    <form id="filterForm" action="{{ route('jobs.index') }}" method="GET">
        <div class="filter-container">
            <div>
                <label for="remote">Remote:</label>
                <select name="remote" id="remote" onchange="document.getElementById('filterForm').submit();">
                    <option value="">-- Select --</option>
                    <option value="yes" {{ request('remote') == 'yes' ? 'selected' : '' }}>Yes</option>
                    <option value="no" {{ request('remote') == 'no' ? 'selected' : '' }}>No</option>
                </select>
            </div>

            <div>
                <label for="job_type">Job Type:</label>
                <select name="job_type" id="job_type" onchange="document.getElementById('filterForm').submit();">
                    <option value="">-- Select --</option>
                    <option value="Full-time" {{ request('job_type') == 'Full-time' ? 'selected' : '' }}>Full-time</option>
                    <option value="Part-time" {{ request('job_type') == 'Part-time' ? 'selected' : '' }}>Part-time</option>
                    <option value="Contract" {{ request('job_type') == 'Contract' ? 'selected' : '' }}>Contract</option>
                    <option value="Internship" {{ request('job_type') == 'Internship' ? 'selected' : '' }}>Internship</option>
                </select>
            </div>

            <div>
                <label for="salary_range">Salary Range:</label>
                <select name="salary_range" id="salary_range" onchange="document.getElementById('filterForm').submit();">
                    <option value="">-- Select --</option>
                    <option value="$40,000 - $50,000" {{ request('salary_range') == '$40,000 - $50,000' ? 'selected' : '' }}>$40,000 - $50,000</option>
                    <option value="$50,000 - $60,000" {{ request('salary_range') == '$50,000 - $60,000' ? 'selected' : '' }}>$50,000 - $60,000</option>
                    <option value="$60,000 - $70,000" {{ request('salary_range') == '$60,000 - $70,000' ? 'selected' : '' }}>$60,000 - $70,000</option>
                    <option value="$70,000 - $80,000" {{ request('salary_range') == '$70,000 - $80,000' ? 'selected' : '' }}>$70,000 - $80,000</option>
                </select>
            </div>

            <div>
                <label for="disability">Disability Support:</label>
                <select name="disability" id="disability" onchange="document.getElementById('filterForm').submit();">
                    <option value="">-- Select --</option>
                    <option value="Mobility Impairment" {{ request('disability') == 'Mobility Impairment' ? 'selected' : '' }}>Mobility Impairment</option>
                    <option value="Visual Impairment" {{ request('disability') == 'Visual Impairment' ? 'selected' : '' }}>Visual Impairment</option>
                    <option value="Hearing Impairment" {{ request('disability') == 'Hearing Impairment' ? 'selected' : '' }}>Hearing Impairment</option>
                    <option value="Cognitive Disability" {{ request('disability') == 'Cognitive Disability' ? 'selected' : '' }}>Cognitive Disability</option>
                    <option value="Autism Spectrum Disorder" {{ request('disability') == 'Autism Spectrum Disorder' ? 'selected' : '' }}>Autism Spectrum Disorder</option>
                    <option value="Speech Impairment" {{ request('disability') == 'Speech Impairment' ? 'selected' : '' }}>Speech Impairment</option>
                    <option value="Chronic Illness" {{ request('disability') == 'Chronic Illness' ? 'selected' : '' }}>Chronic Illness</option>
                </select>
            </div>

            <!-- Search Feature Beside the Filters -->
            <div>
                <label for="search">Search by Keyword:</label>
                <input type="text" name="search" id="search" value="{{ request('search') }}" placeholder="Search by keyword">
                <button type="submit">Search</button>
            </div>
        </div>
    </form>

    <h1>All Job Listings</h1>

    @if($jobs->isEmpty())
        <p>No job listings found matching your criteria.</p>
    @else
        <table border="1">
            <thead>
                <tr>
                    <th>Job Title</th>
                    <th>Company Name</th>
                    <th>Location</th>
                    <th>Remote</th>
                    <th>Job Type</th>
                    <th>Salary Range</th>
                    <th>Application Deadline</th>
                </tr>
            </thead>
            <tbody>
                @foreach($jobs as $job)
                    <tr>
                        <td><a href="{{ route('jobs.show', $job->id) }}">{{ $job->job_title }}</a></td>
                        <td>{{ $job->company->name }}</td>
                        <td>{{ $job->location }}</td>
                        <td>{{ $job->remote ? 'Yes' : 'No' }}</td>
                        <td>{{ $job->job_type }}</td>
                        <td>{{ $job->salary_range }}</td>
                        <td>{{ $job->application_deadline }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</body>
</html>
