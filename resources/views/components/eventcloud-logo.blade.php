<div class="eventcloud-brand" aria-label="EventCloud">

    <svg
        class="eventcloud-brand-icon"
        viewBox="0 0 48 48"
        fill="none"
        xmlns="http://www.w3.org/2000/svg"
        aria-hidden="true"
    >
        <!-- Nube -->
        <path
            d="M13 32.5C9.7 32.5 7 29.8 7 26.5C7 23.4 9.4 20.8 12.5 20.5C13.7 16.2 17.7 13 22.4 13C27.5 13 31.7 16.8 32.3 21.7C37.1 21.7 41 25.2 41 29.6C41 34 37.4 37.5 33 37.5H13"
            stroke="currentColor"
            stroke-width="2.8"
            stroke-linecap="round"
            stroke-linejoin="round"
        />

        <!-- Conexiones -->
        <circle
            cx="18"
            cy="27"
            r="2.2"
            fill="currentColor"
        />

        <circle
            cx="27"
            cy="24"
            r="2.2"
            fill="currentColor"
        />

        <circle
            cx="31"
            cy="31"
            r="2.2"
            fill="currentColor"
        />

        <path
            d="M19.8 26.2L25.1 24.8M28.2 25.8L30 29"
            stroke="currentColor"
            stroke-width="1.8"
            stroke-linecap="round"
        />
    </svg>

    <span class="eventcloud-brand-name">
        EventCloud AI
    </span>

</div>

<style>
    .eventcloud-brand {
        display: inline-flex;
        align-items: center;
        gap: 0.65rem;

        color: #4f6f8f;

        font-family:
            Inter,
            ui-sans-serif,
            system-ui,
            -apple-system,
            BlinkMacSystemFont,
            "Segoe UI",
            sans-serif;

        white-space: nowrap;
    }

    .eventcloud-brand-icon {
        width: 2rem;
        height: 2rem;

        color: #6f9fc4;

        flex-shrink: 0;

        transition:
            transform 0.3s ease,
            color 0.3s ease;
    }

    .eventcloud-brand-name {
        font-size: 1.25rem;
        font-weight: 700;
        letter-spacing: -0.035em;
    }

    .eventcloud-brand:hover .eventcloud-brand-icon {
        color: #8f86c9;
        transform: translateY(-1px) scale(1.04);
    }
</style>
