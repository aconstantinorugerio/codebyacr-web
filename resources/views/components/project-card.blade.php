@props([
    'image',
    'alt',
    'title',
    'type',
    'description',
    'technologies' => [],
    'client' => null,
    'status' => null,
])

<article class="project-card card">
    <img
        src="{{ asset('asset/images/proyectos/' . $image) }}"
        class="project-image card-img-top"
        alt="{{ $alt }}"
        loading="lazy"
        decoding="async"
    >

    <div class="project-body card-body">
        <h3 class="project-title">{{ $title }}</h3>

        <div class="project-meta">
            <div class="project-facts">
                @if ($client)
                    <div class="meta-item">
                        <i class="fa-solid fa-building" aria-hidden="true"></i>
                        <div>
                            <small>Cliente</small>
                            <strong>{{ $client }}</strong>
                        </div>
                    </div>
                @endif

                <div class="meta-item {{ $client ? '' : 'full' }}">
                    <i class="fa-solid fa-layer-group" aria-hidden="true"></i>
                    <div>
                        <small>Tipo</small>
                        <strong>{{ $type }}</strong>
                    </div>
                </div>
            </div>

            <div class="meta-item full project-description">
                <i class="fa-solid fa-circle-info" aria-hidden="true"></i>
                <div>
                    <small>Descripción</small>
                    <p>{{ $description }}</p>
                </div>
            </div>

            <div class="meta-item full project-technologies">
                <div>
                    <small>Tecnologías</small>
                    <div class="tech-tags">
                        @foreach ($technologies as $technology)
                            <span class="badge rounded-pill">
                                <i class="{{ $technology['icon'] }}" aria-hidden="true"></i>
                                {{ $technology['name'] }}
                            </span>
                        @endforeach
                    </div>
                </div>
            </div>

            @if ($status)
                <div class="meta-item full">
                    <span class="status-private badge rounded-pill">
                        <i class="fa-solid fa-lock" aria-hidden="true"></i>
                        {{ $status }}
                    </span>
                </div>
            @endif
        </div>
    </div>
</article>
