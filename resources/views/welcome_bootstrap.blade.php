<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>{{ config('app.name', 'Visitor Registration System') }}</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    </head>

    <body class="bg-white text-dark">
        <a href="#content" class="visually-hidden-focusable position-absolute top-0 start-0 m-2 p-2 bg-white text-dark rounded-2 shadow">
            Skip to content
        </a>

        <header style="background-color:#0B3D91;">
            <div class="container py-3">
                <div class="d-flex flex-column flex-lg-row align-items-lg-center justify-content-between gap-3">
                    <div class="d-flex align-items-center gap-3">
                        <div style="width:40px;height:40px;border-radius:.75rem;background:rgba(255,255,255,.12);display:grid;place-items:center;border:1px solid rgba(255,255,255,.25);">
                            <svg viewBox="0 0 24 24" width="18" height="18" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path d="M12 2l8 4v6c0 5-3.5 9.7-8 10-4.5-.3-8-5-8-10V6l8-4Z" stroke="white" stroke-width="1.6"/>
                                <path d="M8.5 11.2l2.2 2.3 4.9-5.3" stroke="white" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>

                        <div class="lh-tight">
                            <div class="small fw-semibold" style="letter-spacing:.04em;color:rgba(255,255,255,.95);">
                                KERAJAAN MALAYSIA
                            </div>
                            <div class="small text-white-50">
                                Visitor &amp; Vehicle Registration System
                            </div>
                        </div>
                    </div>

                    <span class="badge rounded-pill px-3 py-2 text-white" style="background:rgba(255,255,255,.12)!important;border:1px solid rgba(255,255,255,.18);">
                        Secure • Corporate • Audit-friendly
                    </span>
                </div>

                <div class="mt-4 d-flex flex-column flex-lg-row align-items-lg-center justify-content-between gap-2">
                    <div>
                        <div class="h4 mb-1 text-white fw-semibold">
                            {{ config('app.name', 'Visitor Registration System') }}
                        </div>
                        <div class="small text-white-50">
                            Streamlined visitor entry for offices, facilities, and events.
                        </div>
                    </div>

                    <nav class="nav nav-pills flex-column flex-sm-row" aria-label="Primary">
                        <a class="nav-link text-white-50" style="background:transparent;" href="#modules">
                            Modules
                        </a>
                        <a class="nav-link text-white-50" style="background:transparent;" href="#how-it-works">
                            How it works
                        </a>
                        <a class="nav-link text-white fw-semibold px-3" href="#contact" style="background:rgba(0,0,0,.18)!important;">
                            Contact
                        </a>
                    </nav>
                </div>
            </div>

            <div style="height:2px;width:100%;background:linear-gradient(90deg,#0B3D91,#0B3D91,#C1121F);"></div>
        </header>

        <main id="content">
            <section style="background:linear-gradient(to bottom, rgba(11,61,145,.12), #ffffff 55%, rgba(193,18,31,.06));">
                <div class="container py-5">
                    <div class="row align-items-start g-4">
                        <div class="col-lg-7">
                            <div class="d-inline-flex align-items-center gap-2 px-3 py-2 rounded-pill"
                                style="background:rgba(11,61,145,.10);border:1px solid rgba(11,61,145,.18);">
                                <span style="width:8px;height:8px;border-radius:999px;background:#C1121F;display:inline-block;"></span>
                                <span class="small fw-semibold" style="letter-spacing:.08em;color:#0B3D91;">WELCOME / SELAMAT DATANG</span>
                            </div>

                            <h2 class="mt-4 display-5 fw-bold" style="letter-spacing:-.02em;">
                                Daftar Pelawat &amp; Maklumat Kenderaan Secara Selamat
                            </h2>
                            <p class="mt-3" style="color:#475569;">
                                Corporate and government-aligned visitor registration designed for accurate record-keeping,
                                faster check-in, and consistent reporting.
                            </p>

                            <div class="d-flex flex-column flex-sm-row gap-3 mt-4">
                                <a href="#registration" class="btn btn-primary shadow-sm px-4 py-2 fw-semibold"
                                   style="background-color:#0B3D91;border-color:#0B3D91;">
                                    Start Registration
                                </a>
                                <a href="#how-it-works" class="btn px-4 py-2 fw-semibold"
                                   style="background:#ffffff;border-color:#0B3D91;color:#0B3D91;">
                                    View Process
                                </a>
                            </div>

                            <div class="row g-3 mt-4">
                                <div class="col-md-6">
                                    <div class="card h-100 border-0 shadow-sm">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center gap-3">
                                                <span class="d-inline-grid" style="width:40px;height:40px;border-radius:.75rem;background:rgba(11,61,145,.10);border:1px solid rgba(11,61,145,.18);place-items:center;">
                                                    <svg viewBox="0 0 24 24" width="18" height="18" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                        <path d="M12 1.8 2.8 6.7v6.4c0 5.2 3.6 9.3 9.2 9.9 5.6-.6 9.2-4.7 9.2-9.9V6.7L12 1.8Z" stroke="#0B3D91" stroke-width="1.7"/>
                                                    </svg>
                                                </span>
                                                <div>
                                                    <div class="fw-semibold">Verified Entry</div>
                                                    <div class="small text-muted">Clear visitor identity &amp; purpose.</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="card h-100 border-0 shadow-sm">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center gap-3">
                                                <span class="d-inline-grid" style="width:40px;height:40px;border-radius:.75rem;background:rgba(193,18,31,.10);border:1px solid rgba(193,18,31,.18);place-items:center;">
                                                    <svg viewBox="0 0 24 24" width="18" height="18" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                        <path d="M12 2v6l4 2" stroke="#C1121F" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M21 12a9 9 0 1 1-9-9" stroke="#C1121F" stroke-width="1.7" stroke-linecap="round"/>
                                                    </svg>
                                                </span>
                                                <div>
                                                    <div class="fw-semibold">Faster Check-in</div>
                                                    <div class="small text-muted">Reduce manual paperwork and queues.</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-5">
                            <div class="card shadow-sm border-0">
                                <div class="card-body">
                                    <div class="d-flex align-items-start justify-content-between gap-3">
                                        <div>
                                            <div class="fw-semibold">Operational Highlights</div>
                                            <div class="small text-muted">Designed for audit trails and reporting.</div>
                                        </div>
                                        <span class="badge rounded-pill" style="background:rgba(193,18,31,.10);color:#8B0F14;border:1px solid rgba(193,18,31,.20);padding:.55rem .8rem;">
                                            Ready
                                        </span>
                                    </div>

                                    <div class="mt-4 d-grid gap-3">
                                        <div class="p-3 rounded-3" style="background:#f8fafc;border:1px solid #e2e8f0;">
                                            <div class="d-flex gap-3">
                                                <div class="d-inline-grid" style="width:32px;height:32px;border-radius:.75rem;background:rgba(11,61,145,.10);border:1px solid rgba(11,61,145,.18);place-items:center;color:#0B3D91;font-weight:700;">
                                                    1
                                                </div>
                                                <div>
                                                    <div class="fw-semibold">Capture details</div>
                                                    <div class="small text-muted">Visitor and vehicle information.</div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="p-3 rounded-3" style="background:#f8fafc;border:1px solid #e2e8f0;">
                                            <div class="d-flex gap-3">
                                                <div class="d-inline-grid" style="width:32px;height:32px;border-radius:.75rem;background:rgba(11,61,145,.10);border:1px solid rgba(11,61,145,.18);place-items:center;color:#0B3D91;font-weight:700;">
                                                    2
                                                </div>
                                                <div>
                                                    <div class="fw-semibold">Submit for review</div>
                                                    <div class="small text-muted">Consistent records for the team.</div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="p-3 rounded-3" style="background:#f8fafc;border:1px solid #e2e8f0;">
                                            <div class="d-flex gap-3">
                                                <div class="d-inline-grid" style="width:32px;height:32px;border-radius:.75rem;background:rgba(11,61,145,.10);border:1px solid rgba(11,61,145,.18);place-items:center;color:#0B3D91;font-weight:700;">
                                                    3
                                                </div>
                                                <div>
                                                    <div class="fw-semibold">Check-in on arrival</div>
                                                    <div class="small text-muted">Quick verification at the gate.</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-4 p-3 rounded-3 text-white" style="background:#0B3D91;">
                                        <div class="d-flex gap-3 align-items-start">
                                            <span class="d-inline-grid" style="width:36px;height:36px;border-radius:.85rem;background:rgba(255,255,255,.14);border:1px solid rgba(255,255,255,.25);place-items:center;">
                                                <svg viewBox="0 0 24 24" width="18" height="18" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                    <path d="M12 22s8-4 8-10V6l-8-4-8 4v6c0 6 8 10 8 10Z" stroke="white" stroke-width="1.6"/>
                                                </svg>
                                            </span>
                                            <div>
                                                <div class="fw-semibold">Compliance mindset</div>
                                                <div class="small" style="color:rgba(255,255,255,.85);">Clear process for safer access control.</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="registration" class="py-5">
                <div class="container">
                    <div class="card shadow-sm border-0">
                        <div class="card-body p-4 p-lg-5">
                            <div class="d-flex flex-column flex-lg-row align-items-lg-start justify-content-between gap-4">
                                <div>
                                    <h3 class="fw-bold">Start Registration</h3>
                                    <p class="text-muted mb-0" style="max-width:62ch;">
                                        This landing page is a corporate overview. When your registration routes/pages are ready,
                                        the CTAs can be wired to your controllers.
                                    </p>
                                </div>
                                <div class="d-flex flex-column flex-sm-row gap-2">
                                    <a href="#modules" class="btn btn-dark fw-semibold">Explore Modules</a>
                                    <a href="#contact" class="btn fw-semibold" style="border:1px solid #e2e8f0;color:#0B3D91;background:#fff;">
                                        Contact Helpdesk
                                    </a>
                                </div>
                            </div>

                            <div class="row g-3 mt-4">
                                <div class="col-md-4">
                                    <div class="card h-100" style="background:#f8fafc;border:1px solid #e5e7eb;">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center gap-3">
                                                <span class="d-inline-grid" style="width:48px;height:48px;border-radius:.9rem;background:rgba(11,61,145,.10);border:1px solid rgba(11,61,145,.18);place-items:center;">
                                                    <svg viewBox="0 0 24 24" width="20" height="20" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                        <path d="M16 11V7a4 4 0 1 0-8 0v4" stroke="#0B3D91" stroke-width="1.7" stroke-linecap="round"/>
                                                        <path d="M8 21h8a4 4 0 0 0 0-8H8a4 4 0 0 0 0 8Z" stroke="#0B3D91" stroke-width="1.7" stroke-linecap="round"/>
                                                    </svg>
                                                </span>
                                                <div>
                                                    <div class="fw-semibold">Visitor Details</div>
                                                    <div class="small text-muted">Name, ID, purpose, host.</div>
                                                </div>
                                            </div>
                                            <p class="small text-dark mt-3 mb-0">Collect accurate visitor information for consistent processing.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="card h-100" style="background:#f8fafc;border:1px solid #e5e7eb;">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center gap-3">
                                                <span class="d-inline-grid" style="width:48px;height:48px;border-radius:.9rem;background:rgba(193,18,31,.10);border:1px solid rgba(193,18,31,.18);place-items:center;">
                                                    <svg viewBox="0 0 24 24" width="20" height="20" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                        <path d="M3 13l2-6h14l2 6" stroke="#C1121F" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M7 19a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z" stroke="#C1121F" stroke-width="1.7"/>
                                                        <path d="M17 19a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z" stroke="#C1121F" stroke-width="1.7"/>
                                                    </svg>
                                                </span>
                                                <div>
                                                    <div class="fw-semibold">Vehicle Info</div>
                                                    <div class="small text-muted">Plate number, vehicle type.</div>
                                                </div>
                                            </div>
                                            <p class="small text-dark mt-3 mb-0">Record vehicle details to support access control at the gate.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="card h-100" style="background:#f8fafc;border:1px solid #e5e7eb;">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center gap-3">
                                                <span class="d-inline-grid" style="width:48px;height:48px;border-radius:.9rem;background:rgba(0,0,0,.04);border:1px solid rgba(2,6,23,.12);place-items:center;">
                                                    <svg viewBox="0 0 24 24" width="20" height="20" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                        <path d="M12 6v6l4 2" stroke="#0f172a" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M12 22c5.5 0 10-4.5 10-10S17.5 2 12 2 2 6.5 2 12s4.5 10 10 10Z" stroke="#0f172a" stroke-width="1.7"/>
                                                    </svg>
                                                </span>
                                                <div>
                                                    <div class="fw-semibold">Records &amp; Reporting</div>
                                                    <div class="small text-muted">Audit trail and consistent logs.</div>
                                                </div>
                                            </div>
                                            <p class="small text-dark mt-3 mb-0">Centralize submissions so teams can review and report quickly.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-4 p-3 rounded-3" style="border:1px solid rgba(11,61,145,.20);background:rgba(11,61,145,.05);">
                                <div class="d-flex gap-3 align-items-start">
                                    <span class="d-inline-grid" style="width:36px;height:36px;border-radius:.85rem;background:rgba(11,61,145,.10);border:1px solid rgba(11,61,145,.18);place-items:center;color:#0B3D91;">
                                        <svg viewBox="0 0 24 24" width="18" height="18" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path d="M12 2l9 5v10l-9 5-9-5V7l9-5Z" stroke="#0B3D91" stroke-width="1.7"/>
                                            <path d="M12 9v4" stroke="#0B3D91" stroke-width="1.7" stroke-linecap="round"/>
                                            <path d="M12 17h.01" stroke="#0B3D91" stroke-width="2.2" stroke-linecap="round"/>
                                        </svg>
                                    </span>
                                    <div>
                                        <div class="fw-semibold">Next step</div>
                                        <div class="small text-muted">
                                            If you add dedicated routes/pages (e.g. visitor form, vehicle form),
                                            the CTAs can be wired to your controllers.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="how-it-works" class="py-5">
                <div class="container">
                    <div class="row g-4 align-items-start">
                        <div class="col-lg-6">
                            <div class="card shadow-sm border-0">
                                <div class="card-body p-4 p-lg-5">
                                    <h3 class="fw-bold">How it works</h3>
                                    <p class="text-muted mb-4">A simple flow that supports corporate operations and consistent data capture.</p>

                                    <ol class="list-group list-group-numbered">
                                        <li class="list-group-item">
                                            <div class="fw-semibold">Provide visitor &amp; vehicle details</div>
                                            <div class="small text-muted">Purpose, host, and plate information.</div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="fw-semibold">Submit registration</div>
                                            <div class="small text-muted">A structured submission for easier review.</div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="fw-semibold">Receive access status</div>
                                            <div class="small text-muted">Keep records for the relevant gate team.</div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="fw-semibold">Check-in at arrival</div>
                                            <div class="small text-muted">Verify and log attendance efficiently.</div>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="card shadow-sm border-0">
                                <div class="card-body p-4 p-lg-5">
                                    <h3 class="fw-bold" id="modules">Corporate Modules</h3>
                                    <p class="text-muted">Built to match the way government and corporate teams track visitor access.</p>

                                    <div class="row g-3 mt-3">
                                        <div class="col-md-6">
                                            <div class="card h-100" style="background:#f8fafc;border:1px solid #e5e7eb;">
                                                <div class="card-body">
                                                    <div class="fw-semibold">Visitor Register</div>
                                                    <div class="small text-muted mt-1">Capture visitor identity and host information.</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="card h-100" style="background:#f8fafc;border:1px solid #e5e7eb;">
                                                <div class="card-body">
                                                    <div class="fw-semibold">Vehicle Registry</div>
                                                    <div class="small text-muted mt-1">Store plate number and vehicle type.</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="card h-100" style="background:#f8fafc;border:1px solid #e5e7eb;">
                                                <div class="card-body">
                                                    <div class="fw-semibold">Policy &amp; Rules</div>
                                                    <div class="small text-muted mt-1">Standardize data and compliance checks.</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="card h-100" style="background:#f8fafc;border:1px solid #e5e7eb;">
                                                <div class="card-body">
                                                    <div class="fw-semibold">Audit-friendly Logs</div>
                                                    <div class="small text-muted mt-1">Consistent records for review and reporting.</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-4 p-3 rounded-3" style="border:1px solid rgba(11,61,145,.20);background:rgba(11,61,145,.05);">
                                        <div class="fw-semibold">Ready for corporate workflows</div>
                                        <div class="small text-muted">Add real routes later—this page is structured for smooth integration.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="contact" class="py-5">
                <div class="container">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-4 p-lg-5" style="background:#0B3D91;">
                            <div class="row align-items-start g-4">
                                <div class="col-lg-6">
                                    <h3 class="fw-bold text-white">Helpdesk / Pertanyaan</h3>
                                    <p class="text-white-50 mb-0">For support, system access, and process guidance.</p>
                                </div>
                                <div class="col-lg-6">
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <div class="p-3 rounded-3" style="background:rgba(255,255,255,.10);border:1px solid rgba(255,255,255,.18);">
                                                <div class="small fw-semibold text-white-50">Email</div>
                                                <div class="text-white fw-semibold mt-1">helpdesk@your-agency.gov.my</div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="p-3 rounded-3" style="background:rgba(255,255,255,.10);border:1px solid rgba(255,255,255,.18);">
                                                <div class="small fw-semibold text-white-50">Phone</div>
                                                <div class="text-white fw-semibold mt-1">+60 3-0000 0000</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <footer class="py-4 border-top">
            <div class="container d-flex flex-column flex-md-row align-items-md-center justify-content-between gap-2">
                <div class="small text-muted">
                    © {{ now()->year }} {{ config('app.name', 'Visitor Registration System') }}. All rights reserved.
                </div>
                <div class="small text-muted">Designed for corporate-friendly access control.</div>
            </div>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>

