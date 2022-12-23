<x-basicProfile
    name = "{{ $user['name'] }}"
    description = "{{ $user['description'] }}"
    country = "{{ $user['country'] }}"
    skills = "{{ $user['skills'] }}"
    projects_posted = "{{ $job_details['projects_posted'] }}"
    job_count = "{{ $job_details['job_count'] }}"
></x-basicProfile>