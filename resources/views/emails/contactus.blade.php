<body>
    <div
        style="--tw-text-opacity: 1; color: rgb(31 41 55 / var(--tw-text-opacity));  background-color: rgb(243 244 246 / var(--tw-bg-opacity)); margin: 1rem">
        <h1
            style=" font-weight: 700;  font-size: 1.5rem;
            line-height: 2rem;  --tw-bg-opacity: 1;
            background-color: rgb(74 222 128 / var(--tw-bg-opacity));  color: rgb(249 250 251 / var(--tw-text-opacity)); padding: 8px;">
            {{ $contact['name'] }}</h1>

        <p style="font-weight: 700; padding-left: 8px; padding-rigth: 8px;">{{ $contact['email'] }}</p>

        <p style="padding-left: 8px; padding-rigth: 8px;"> {{ $contact['message'] }}</p>
    </div>
</body>
