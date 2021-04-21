<a href="{{ route('show.course', $course->id) }}" class="link-show-course">
    <div class="card mt-3 shadow-card-1">
        <img src="{{ asset('logo/gth.png') }}" class="card-img-top" alt="...">


        <div class="card-body">
            <h5 class="card-title">{{ $course->name }}</h5>
            <span>
                Duracion: {{ $course->duration }}
            </span>
            <p class="card-text text-justify text-wrap text-truncate" style="height: 6rem;">
                {{ $course->description }}</p>
        </div>
    </div>
</a>
