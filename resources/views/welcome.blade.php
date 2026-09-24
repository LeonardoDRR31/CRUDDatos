<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>EventCloud AI</title>

    @vite(['resources/css/eventcloud-public.css', 'resources/js/app.js'])
</head>

<body>

    <div class="ec-page">

        {{-- NAVBAR --}}
        <header class="ec-navbar">

            <a href="/" class="ec-logo">
                <x-eventcloud-logo />
            </a>

            <a href="{{ route('filament.admin.auth.login') }}" class="ec-login">
                Iniciar sesión
            </a>


        </header>


        {{-- HERO --}}
        <main>

            <section class="ec-hero">

                <div class="ec-hero-content">

                    <div class="ec-badge">
                        ✦ Plataforma inteligente para eventos
                    </div>

                    <h1>
                        Gestiona tus eventos
                        <br>

                        <span class="ec-gradient-text">
                            con inteligencia artificial
                        </span>
                    </h1>

                    <p>
                        EventCloud AI te permite planificar, organizar y
                        gestionar eventos presenciales, virtuales e híbridos
                        desde una única plataforma.
                    </p>

                    <div class="ec-actions">

                        <a href="#caracteristicas" class="ec-button ec-button-primary">
                            Descubrir plataforma
                        </a>

                        <a href="{{ route('filament.admin.auth.login') }}" class="ec-login">
                            Iniciar sesión
                        </a>


                    </div>

                </div>

            </section>


            {{-- CARACTERÍSTICAS --}}
            <section class="ec-features" id="caracteristicas">

                <div class="ec-section-title">

                    <h2>
                        Todo lo que necesitas
                    </h2>

                    <p>
                        Una plataforma centralizada para gestionar
                        cada parte de tu evento.
                    </p>

                </div>


                <div class="ec-feature-grid">

                    <article class="ec-card">

                        <div class="ec-card-icon">
                            📅
                        </div>

                        <h3>
                            Gestión de eventos
                        </h3>

                        <p>
                            Organiza eventos presenciales, virtuales
                            e híbridos desde un único lugar.
                        </p>

                    </article>


                    <article class="ec-card">

                        <div class="ec-card-icon">
                            👥
                        </div>

                        <h3>
                            Participantes
                        </h3>

                        <p>
                            Gestiona inscripciones, participantes,
                            asistencia y certificados.
                        </p>

                    </article>


                    <article class="ec-card">

                        <div class="ec-card-icon">
                            ✨
                        </div>

                        <h3>
                            Inteligencia artificial
                        </h3>

                        <p>
                            Obtén recomendaciones, agendas personalizadas
                            y asistencia inteligente para tus eventos.
                        </p>

                    </article>


                    <article class="ec-card">

                        <div class="ec-card-icon">
                            🎤
                        </div>

                        <h3>
                            Ponentes
                        </h3>

                        <p>
                            Administra ponentes, actividades,
                            conferencias y programación.
                        </p>

                    </article>


                    <article class="ec-card">

                        <div class="ec-card-icon">
                            📊
                        </div>

                        <h3>
                            Encuestas y análisis
                        </h3>

                        <p>
                            Recopila opiniones y utiliza IA para
                            analizar los resultados.
                        </p>

                    </article>


                    <article class="ec-card">

                        <div class="ec-card-icon">
                            🤖
                        </div>

                        <h3>
                            Asistente IA

                        </h3>

                        <p>
                            Permite consultar información del evento
                            mediante lenguaje natural.
                        </p>

                    </article>

                </div>

            </section>

        </main>


        {{-- FOOTER --}}
        <footer class="ec-footer">

            © {{ date('Y') }} EventCloud AI.
            Todos los derechos reservados.

        </footer>

    </div>

</body>

</html>
