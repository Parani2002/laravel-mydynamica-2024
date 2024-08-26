<x-errorlayout>
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="text-center mt-4">
                                <img class="mb-4 img-error" src="{{ Vite::asset('public/assets/img/error-404-monochrome.svg') }}" />
                                <p class="lead">This requested URL was not found on this server.</p>
                                <a href="index.html">
                                    <i class="fas fa-arrow-left me-1"></i>
                                    Return to Dashboard
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
</x-errorlayout>