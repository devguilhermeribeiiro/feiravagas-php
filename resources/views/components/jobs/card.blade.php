<a class="job-card">
    <input type="hidden" name="job_id" value="{{ $job->id }}">

    <p class="font-semibold text-xl">
        {{ $job->title }}
    </p>

    <p>
        {{ $job->company }}
    </p>

    <p class="self-end">
        {{ $job->created_at->diffForHumans() }}
    </p>
</a>
