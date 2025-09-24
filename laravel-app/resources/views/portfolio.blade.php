<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - {{ $portfolio['name'] }}</title>
    <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">
</head>
<body>
    <div class="portfolio-container">
        <h1>{{ $portfolio['name'] }}</h1>
        <h2>{{ $portfolio['title'] }}</h2>
        <img src="{{ $portfolio['profile_image'] }}" alt="Profile Image" width="150">
        <p><strong>Email:</strong> {{ $portfolio['email'] }}</p>
        <p><strong>Phone:</strong> {{ $portfolio['phone'] }}</p>
        <p><strong>Location:</strong> {{ $portfolio['location'] }}</p>
        <p>{{ $portfolio['bio'] }}</p>
        <h3>Skills</h3>
        <ul>
            @foreach ($portfolio['skills'] as $skill)
                <li>{{ $skill }}</li>
            @endforeach
        </ul>
        <h3>Projects</h3>
        <ul>
            @foreach ($portfolio['projects'] as $project)
                <li><strong>{{ $project['name'] }}</strong>: {{ $project['description'] }}</li>
            @endforeach
        </ul>
        <h3>Experience</h3>
        <ul>
            @foreach ($portfolio['experience'] as $exp)
                <li>{{ $exp['role'] }} at {{ $exp['company'] }} ({{ $exp['years'] }})</li>
            @endforeach
        </ul>
        <h3>Education</h3>
        <ul>
            @foreach ($portfolio['education'] as $edu)
                <li>{{ $edu['degree'] }} - {{ $edu['school'] }}</li>
            @endforeach
        </ul>
        <h3>Social Links</h3>
        <ul>
            @foreach ($portfolio['social_links'] as $platform => $link)
                <li><a href="{{ $link }}" target="_blank">{{ ucfirst($platform) }}</a></li>
            @endforeach
        </ul>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="/css/portfolio.css">
</head>
<body>
    <div class="portfolio-container">
        <h1>{{ $portfolio['name'] }}</h1>
        <h2>{{ $portfolio['title'] }}</h2>
        <p>{{ $portfolio['bio'] }}</p>
        <ul>
            <li>Email: {{ $portfolio['email'] }}</li>
            <li>Phone: {{ $portfolio['phone'] }}</li>
            <li>Location: {{ $portfolio['location'] }}</li>
        </ul>
        <h3>Skills</h3>
        <ul>
            @foreach($portfolio['skills'] as $skill)
                <li>{{ $skill }}</li>
            @endforeach
        </ul>
        <h3>Projects</h3>
        <ul>
            @foreach($portfolio['projects'] as $project)
                <li>{{ $project }}</li>
            @endforeach
        </ul>
        <h3>Experience</h3>
        <ul>
            @foreach($portfolio['experience'] as $exp)
                <li>{{ $exp }}</li>
            @endforeach
        </ul>
        <h3>Education</h3>
        <ul>
            @foreach($portfolio['education'] as $edu)
                <li>{{ $edu }}</li>
            @endforeach
        </ul>
        <h3>Social Links</h3>
        <ul>
            @foreach($portfolio['social_links'] as $link)
                <li>{{ $link }}</li>
            @endforeach
        </ul>
    </div>
</body>
</html>
