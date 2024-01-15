<div class="dlabnav">
    <div class="dlabnav-scroll">
        <ul class="metismenu" id="menu">
            <li>
                <a class="has-arrow " href="{{ route('dashboard') }}" aria-expanded="false">
                    <i class="material-symbols-outlined">home</i>
                    <span class="nav-text">Dashboard</span>
                </a>

            </li>
            <li>
                <a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                    <i class="material-symbols-outlined">school</i>
                    <span class="nav-text">Students</span>
                </a>
                <ul aria-expanded="false">
                    <li>
                        <a href="{{ route('students') }}">List </a>
                    </li>
                    <li>
                        <a href="{{ route('add-student') }}">Create</a>
                    </li>

                </ul>

            </li>

            <li>
                <a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                    <i class="material-symbols-outlined">school</i>
                    <span class="nav-text">Courses</span>
                </a>
                <ul aria-expanded="false">
                    <li>
                        <a href="student.html">List </a>
                    </li>
                    <li>
                        <a href="student-detail.html">Create</a>
                    </li>

                </ul>
            </li>
            <li>
                <a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                    <i class="material-symbols-outlined">person</i>
                    <span class="nav-text">Teacher</span>
                </a>
                <ul aria-expanded="false">

                    <li>
                        <a href="{{ route('teachers') }}">List</a>
                    </li>
                    <li>
                        <a href="{{ route('add-teacher') }}">Create</a>
                    </li>
                </ul>
            </li>

            <li>


















        <div class="copyright">
            <p>
                <strong>School Admission Dashboard</strong>
            </p>
            <p class="fs-12">
                Made with <span class="heart"></span>
                by DexignLab
            </p>
        </div>
    </div>
</div>
