<div class="card mt-3 shadow-card-1" style="width: 100%;">
    <img src="{{ asset('logo/gth.png') }}" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">{{ $course->name }}</h5>
        <p class="card-text">{{ $course->description }}</p>
        <a href="{{ route('show.course', $course->id) }}" class="btn btn-gth-blue ">Comprar</a>
    </div>
</div>
