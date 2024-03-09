<div class="dlabnav">
    <div class="dlabnav-scroll">
        <ul class="metismenu" id="menu">
            <li>
                <a class="has-arrow " href="{{ route('teacher.dashboard') }}" aria-expanded="false">
                    <i class="material-symbols-outlined">home</i>
                    <span class="nav-text">Dashboard</span>
                </a>

            </li>
            <li>
                <a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                    <i class="material-symbols-outlined">school</i>
                    <span class="nav-text">Lecturer</span>
                </a>
                <ul aria-expanded="false">
                    <li>
                        <a href="{{ route('students') }}">List of Course  </a>
                    </li>
                    <li>
                        <a href="{{ route('add-student') }}">Create lesson</a>
                    </li>

                </ul>

            </li>
        <div class="copyright">
            <p>
                <strong>School Admission Dashboard</strong>
            </p>
            <p class="fs-12">
                Made with <span class="heart"></span>
                by BML
            </p>
        </div>
    </div>
</div>
