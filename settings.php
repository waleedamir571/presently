<?php include 'partials/header.php'; ?>
<!-- Page Body Start-->

<!-- Page sidebar end-->
<div class="page-body">
    <div class="container-fluid">
        <div class="dashboard">


            <div class="project-header">
                <p class="project">Setting & Members</p>
                <div class="controls">
                    <button class="create-btn" data-bs-toggle="modal" data-original-title="test"
                        data-bs-target="#exampleModalv1">+
                        Clone a Voice <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25"
                            fill="none">
                            <path
                                d="M21.7381 16.6299C21.7432 16.8486 21.6764 17.0628 21.5481 17.2399C21.4214 17.4205 21.2386 17.5541 21.0281 17.6199L19.3181 18.1899C18.7914 18.3648 18.3123 18.6592 17.9181 19.0499C17.5244 19.4417 17.2296 19.9216 17.0581 20.4499L16.4581 22.1499C16.3956 22.354 16.2695 22.5327 16.0981 22.6599C15.9152 22.7841 15.6992 22.8503 15.4781 22.8499C15.2563 22.8594 15.0376 22.7948 14.8565 22.6662C14.6754 22.5377 14.5423 22.3525 14.4781 22.1399L13.9081 20.4299C13.7366 19.9016 13.4418 19.4217 13.0481 19.0299C12.6507 18.641 12.1728 18.344 11.6481 18.1599L9.93811 17.5999C9.73567 17.529 9.5584 17.4003 9.42812 17.2299C9.29682 17.0494 9.22358 16.8331 9.21812 16.6099C9.20863 16.3881 9.27327 16.1694 9.40182 15.9883C9.53037 15.8072 9.71554 15.6741 9.92812 15.6099L11.6481 15.0399C12.1815 14.8675 12.6664 14.571 13.0628 14.1746C13.4592 13.7782 13.7557 13.2933 13.9281 12.7599L14.4981 11.0699C14.5564 10.862 14.6804 10.6785 14.8517 10.5469C15.0229 10.4153 15.2322 10.3427 15.4481 10.3399C15.6631 10.3399 15.8741 10.3989 16.0581 10.5099C16.2401 10.6349 16.3801 10.8129 16.4581 11.0199L17.0381 12.7599C17.2105 13.2933 17.5071 13.7782 17.9035 14.1746C18.2998 14.571 18.7847 14.8675 19.3181 15.0399L21.0181 15.6399C21.2249 15.7077 21.404 15.8411 21.5281 16.0199C21.6636 16.1945 21.7374 16.409 21.7381 16.6299ZM11.7391 10.2699C11.7376 10.466 11.6785 10.6572 11.5691 10.8199C11.4509 10.9809 11.2872 11.1028 11.0991 11.1699L9.83911 11.5899C9.48611 11.7119 9.16612 11.9099 8.89912 12.1699C8.63812 12.4361 8.43995 12.7573 8.31912 13.1099L7.88911 14.3499C7.82815 14.5412 7.70495 14.7067 7.53911 14.8199C7.37472 14.9347 7.17961 14.9974 6.97912 14.9999C6.77413 14.9965 6.57515 14.9302 6.40911 14.8099C6.25183 14.6903 6.13352 14.5267 6.06911 14.3399L5.65911 13.0899C5.53881 12.7399 5.34047 12.4219 5.07911 12.1599C4.82301 11.8912 4.50308 11.6917 4.14912 11.5799L2.89911 11.1599C2.70515 11.0989 2.53655 10.9759 2.41911 10.8099C2.33952 10.6853 2.28856 10.5445 2.26993 10.3977C2.2513 10.251 2.26545 10.102 2.31136 9.96136C2.35727 9.82076 2.4338 9.69209 2.53544 9.58463C2.63707 9.47716 2.76128 9.39359 2.89911 9.33992L4.14912 8.92992C4.50281 8.80642 4.82408 8.6047 5.08899 8.33979C5.3539 8.07488 5.55562 7.75361 5.67911 7.39992L6.08912 6.16992C6.14806 5.98559 6.25922 5.82232 6.40911 5.69992C6.5684 5.5799 6.75994 5.51025 6.95912 5.49992C7.16091 5.4945 7.35962 5.55027 7.52911 5.65992C7.69593 5.77252 7.82488 5.93284 7.89912 6.11992L8.31912 7.39992C8.44261 7.75361 8.64433 8.07488 8.90924 8.33979C9.17415 8.6047 9.49542 8.80642 9.84911 8.92992L11.0991 9.35992C11.2861 9.42414 11.4474 9.54686 11.5591 9.70992C11.6775 9.87252 11.7406 10.0688 11.7391 10.2699ZM17.5281 4.90992C17.5191 5.09225 17.4603 5.26862 17.3581 5.41992C17.2541 5.56252 17.1068 5.66773 16.9381 5.71992L16.3181 5.92992C16.1977 5.97148 16.0883 6.0399 15.9982 6.12999C15.9081 6.22008 15.8397 6.32948 15.7981 6.44992L15.5781 7.07992C15.5177 7.23332 15.4176 7.36792 15.2881 7.46992C15.1407 7.58802 14.957 7.6516 14.7681 7.64992C14.5953 7.63919 14.4274 7.5878 14.2781 7.49992C14.1286 7.38978 14.0168 7.23608 13.9581 7.05992L13.7481 6.43992C13.712 6.31695 13.6428 6.20626 13.5481 6.11992C13.46 6.02741 13.3499 5.95862 13.2281 5.91992L12.6081 5.71992C12.4431 5.65559 12.2982 5.54861 12.1881 5.40992C12.0844 5.26004 12.0286 5.0822 12.0281 4.89992C12.0339 4.71699 12.093 4.53974 12.1981 4.38992C12.3058 4.25106 12.4518 4.14677 12.6181 4.08992L13.2281 3.88992C13.3513 3.84789 13.4639 3.77966 13.5581 3.68992C13.6479 3.59567 13.7161 3.48308 13.7581 3.35992L13.9681 2.73992C14.0281 2.58492 14.1231 2.44792 14.2481 2.33992C14.3916 2.23403 14.5608 2.16843 14.7381 2.14992C14.9268 2.14884 15.1115 2.20459 15.2681 2.30992C15.4091 2.41597 15.5195 2.55742 15.5881 2.71992L15.7981 3.35992C15.8401 3.48308 15.9084 3.59567 15.9981 3.68992C16.0911 3.77629 16.1997 3.84416 16.3181 3.88992L16.9481 4.09992C17.1083 4.16296 17.2496 4.26629 17.3581 4.39992C17.4672 4.54771 17.5267 4.72623 17.5281 4.90992Z"
                                fill="white" />
                        </svg></button>
                    <button class="import-btn"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="25"
                            viewBox="0 0 24 25" fill="none">
                            <path d="M9 17.5V11.5L7 13.5" stroke="#1C0C13" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M9 11.5L11 13.5" stroke="#1C0C13" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path
                                d="M22 10.5V15.5C22 20.5 20 22.5 15 22.5H9C4 22.5 2 20.5 2 15.5V9.5C2 4.5 4 2.5 9 2.5H14"
                                stroke="#1C0C13" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M22 10.5H18C15 10.5 14 9.5 14 6.5V2.5L22 10.5Z" stroke="#1C0C13" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg> Import Voice</button>
                </div>
            </div>

            <div class="project-header">
                <ul class="nav nav-tabs" id="projectTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active create-btn" id="explore-tab" data-bs-toggle="tab"
                            data-bs-target="#explore" type="button" role="tab" aria-controls="explore"
                            aria-selected="true">
                            <!-- Explore Icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="15" viewBox="0 0 14 15"
                                fill="none">
                                <path d="M3.5 6.25098V8.7535" stroke="#1C0C13" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M5.25 5.41699V9.582" stroke="#1C0C13" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M7 4.58301V10.4163" stroke="#1C0C13" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M8.75 5.41699V9.582" stroke="#1C0C13" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M10.5 6.25098V8.7535" stroke="#1C0C13" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M6.99996 13.3337C10.2216 13.3337 12.8333 10.722 12.8333 7.50033C12.8333 4.27866 10.2216 1.66699 6.99996 1.66699C3.7783 1.66699 1.16663 4.27866 1.16663 7.50033C1.16663 10.722 3.7783 13.3337 6.99996 13.3337Z"
                                    stroke="#1C0C13" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            Settings
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link create-btn" id="voices-tab" data-bs-toggle="tab"
                            data-bs-target="#voices" type="button" role="tab" aria-controls="voices"
                            aria-selected="false">
                            <!-- My Voices Icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="15" viewBox="0 0 14 15"
                                fill="none">
                                <path
                                    d="M12.6875 7.5C12.6875 9.00842 12.0883 10.4551 11.0217 11.5217C9.95506 12.5883 8.50842 13.1875 7 13.1875C5.49158 13.1875 4.04494 12.5883 2.97833 11.5217C1.91172 10.4551 1.3125 9.00842 1.3125 7.5C1.3125 5.99158 1.91172 4.54494 2.97833 3.47833C4.04494 2.41172 5.49158 1.8125 7 1.8125C8.50842 1.8125 9.95506 2.41172 11.0217 3.47833C12.0883 4.54494 12.6875 5.99158 12.6875 7.5ZM0 7.5C0 9.35652 0.737498 11.137 2.05025 12.4497C3.36301 13.7625 5.14348 14.5 7 14.5C8.85652 14.5 10.637 13.7625 11.9497 12.4497C13.2625 11.137 14 9.35652 14 7.5C14 5.64348 13.2625 3.86301 11.9497 2.55025C10.637 1.2375 8.85652 0.5 7 0.5C5.14348 0.5 3.36301 1.2375 2.05025 2.55025C0.737498 3.86301 0 5.64348 0 7.5ZM6.34375 3.78125V7.5C6.34375 7.71875 6.45312 7.92383 6.63633 8.04688L9.26133 9.79688C9.56211 9.99922 9.96953 9.91719 10.1719 9.61367C10.3742 9.31016 10.2922 8.90547 9.98867 8.70312L7.65625 7.15V3.78125C7.65625 3.41758 7.36367 3.125 7 3.125C6.63633 3.125 6.34375 3.41758 6.34375 3.78125Z"
                                    fill="#1C0C13" />
                            </svg>
                            Members
                        </button>
                    </li>

                </ul>
                <button class="create-btn" data-bs-toggle="modal" data-original-title="test"
                    data-bs-target="#exampleModalv10">+
                    Add Collections </button>
            </div>

            <div class="tab-content pt-3" id="projectTabsContent">
                <div class="tab-pane fade show active" id="explore" role="tabpanel" aria-labelledby="explore-tab">
                    <div class="pt-xxl-3">
                        <div class="projects">

                            <div class="pt-xxl-3">
                                <p class="public">Manage workspace members </p>
                                <br>
                                <p class="invite "><b>Invite others to this workspace</b> </p>
                                <div class=" mt-5">

                                    <!-- Tabs nav -->
                                    <ul class="nav nav-tabs" id="inviteTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="email-tab" data-bs-toggle="tab"
                                                data-bs-target="#email-content" type="button" role="tab">
                                                @ Invite with email address
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="link-tab" data-bs-toggle="tab"
                                                data-bs-target="#link-content" type="button" role="tab">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="15"
                                                    viewBox="0 0 14 15" fill="none">
                                                    <path
                                                        d="M8.74438 10.7087H9.62522C11.3869 10.7087 12.8336 9.26783 12.8336 7.50033C12.8336 5.73866 11.3927 4.29199 9.62522 4.29199H8.74438"
                                                        stroke="#1C0C13" stroke-width="1.0625" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M5.25033 4.29199H4.37533C2.60783 4.29199 1.16699 5.73283 1.16699 7.50033C1.16699 9.26199 2.60783 10.7087 4.37533 10.7087H5.25033"
                                                        stroke="#1C0C13" stroke-width="1.0625" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M4.66699 7.5H9.33366" stroke="#1C0C13"
                                                        stroke-width="1.0625" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg> Invite with link
                                            </button>
                                        </li>
                                    </ul>

                                    <br>
                                    <br>

                                    <!-- Tabs content -->
                                    <div class="tab-content  border-top-0 " id="inviteTabContent">

                                        <!-- Tab 1: Invite with email address -->
                                        <div class="tab-pane fade show active" id="email-content" role="tabpanel">
                                            <p class="invite">By adding members, you grant them the ability to edit,
                                                create, and share
                                                prezently within this
                                                workspace.</p>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="input-group mb-3">
                                                        <input type="email" class="form-control"
                                                            placeholder="Add emails or people">
                                                        <!-- <button class="btn btn-primary" type="button">Send Invite</button> -->
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <!-- Tab 2: Invite with link -->
                                        <div class="tab-pane fade" id="link-content" role="tabpanel">
                                            <p class="invite">Anyone with the link will be able to join your workspace
                                                as a member. By
                                                adding members, you <br>
                                                grant them the ability to edit, create, and share prezently within this
                                                workspace.</p>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="input-group mb-3">
                                                        <input type="text" class="form-control"
                                                            placeholder="https://prezently.ai/pitch_deck_raynor’s_project">
                                                        <button class=" access" type="button"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="15"
                                                                height="15" viewBox="0 0 15 15" fill="none">
                                                                <path
                                                                    d="M8.45882 7.32682C8.45882 9.18182 6.95966 10.681 5.10466 10.681C3.24966 10.681 1.75049 9.18182 1.75049 7.32682C1.75049 5.47182 3.24966 3.97266 5.10466 3.97266"
                                                                    stroke="#1C0C13" stroke-width="0.875"
                                                                    stroke-linecap="round" stroke-linejoin="round">
                                                                </path>
                                                                <path
                                                                    d="M6.41699 7.32715C6.41699 5.39632 7.98616 3.82715 9.91699 3.82715C11.8478 3.82715 13.417 5.39632 13.417 7.32715C13.417 9.25798 11.8478 10.8271 9.91699 10.8271"
                                                                    stroke="#1C0C13" stroke-width="0.875"
                                                                    stroke-linecap="round" stroke-linejoin="round">
                                                                </path>
                                                            </svg> Copy
                                                            Link</button>
                                                    </div>
                                                </div>
                                            </div>


                                            <p class="invite">Only admins can see this link.</p>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <br>
                            <p class="title">Invite others to this workspace</p>
                            <ul role="tablist">

                                <button class=" create-btn" id="explore-tab" data-bs-toggle="tab"
                                    data-bs-target="#explore" type="button" role="tab" aria-controls="explore"
                                    aria-selected="true">
                                    <!-- Explore Icon -->
                                    @
                                    Active Members (14)
                                </button>

                                <button class=" import-btn">
                                    <!-- My Voices Icon -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="15" viewBox="0 0 14 15"
                                        fill="none">
                                        <path
                                            d="M8.74438 10.7087H9.62522C11.3869 10.7087 12.8336 9.26783 12.8336 7.50033C12.8336 5.73866 11.3927 4.29199 9.62522 4.29199H8.74438"
                                            stroke="#1C0C13" stroke-width="1.0625" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M5.25033 4.29199H4.37533C2.60783 4.29199 1.16699 5.73283 1.16699 7.50033C1.16699 9.26199 2.60783 10.7087 4.37533 10.7087H5.25033"
                                            stroke="#1C0C13" stroke-width="1.0625" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M4.66699 7.5H9.33366" stroke="#1C0C13" stroke-width="1.0625"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    Invite with link
                                </button>

                            </ul>

                        </div>
                        <br>
                        <div class="col-md-12">
                            <div class="marco-card">
                                <div class="marco-left-section">
                                    <img src="assets/images/logo/user1.png" alt="">
                                    <div class="marco-text-block">
                                        <div class="title">Samrah Lee (Owner)</div>
                                        <div class="text2">a.samrah_lee@presently.com</div>
                                    </div>
                                </div>

                                <div class="foler">
                                    uploaded 15 days ago
                                </div>

                                <div class="marco-right-section">
                                    <button class="access"><svg xmlns="http://www.w3.org/2000/svg" width="15"
                                            height="15" viewBox="0 0 15 15" fill="none">
                                            <path
                                                d="M8.45882 7.32682C8.45882 9.18182 6.95966 10.681 5.10466 10.681C3.24966 10.681 1.75049 9.18182 1.75049 7.32682C1.75049 5.47182 3.24966 3.97266 5.10466 3.97266"
                                                stroke="#1C0C13" stroke-width="0.875" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M6.41699 7.32715C6.41699 5.39632 7.98616 3.82715 9.91699 3.82715C11.8478 3.82715 13.417 5.39632 13.417 7.32715C13.417 9.25798 11.8478 10.8271 9.91699 10.8271"
                                                stroke="#1C0C13" stroke-width="0.875" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg> Full Access</button>
                                </div>

                            </div>
                        </div>
                        <br>
                        <div class="col-md-12">
                            <div class="marco-card">
                                <div class="marco-left-section">
                                    <img src="assets/images/logo/user1.png" alt="">
                                    <div class="marco-text-block">
                                        <div class="title">Samrah Lee (Owner)</div>
                                        <div class="text2">a.samrah_lee@presently.com</div>
                                    </div>
                                </div>

                                <div class="foler">
                                    uploaded 15 days ago
                                </div>

                                <div class="marco-right-section">
                                    <button class="access"><svg xmlns="http://www.w3.org/2000/svg" width="15"
                                            height="15" viewBox="0 0 15 15" fill="none">
                                            <path
                                                d="M8.45882 7.32682C8.45882 9.18182 6.95966 10.681 5.10466 10.681C3.24966 10.681 1.75049 9.18182 1.75049 7.32682C1.75049 5.47182 3.24966 3.97266 5.10466 3.97266"
                                                stroke="#1C0C13" stroke-width="0.875" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M6.41699 7.32715C6.41699 5.39632 7.98616 3.82715 9.91699 3.82715C11.8478 3.82715 13.417 5.39632 13.417 7.32715C13.417 9.25798 11.8478 10.8271 9.91699 10.8271"
                                                stroke="#1C0C13" stroke-width="0.875" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg> View Only</button>
                                </div>

                            </div>
                        </div>
                        <br>
                        <div class="col-md-12">
                            <div class="marco-card">
                                <div class="marco-left-section">
                                    <img src="assets/images/logo/user1.png" alt="">
                                    <div class="marco-text-block">
                                        <div class="title">Samrah Lee (Owner)</div>
                                        <div class="text2">a.samrah_lee@presently.com</div>
                                    </div>
                                </div>

                                <div class="foler">
                                    uploaded 15 days ago
                                </div>

                                <div class="marco-right-section">
                                    <button class="access"><svg xmlns="http://www.w3.org/2000/svg" width="15"
                                            height="15" viewBox="0 0 15 15" fill="none">
                                            <path
                                                d="M8.45882 7.32682C8.45882 9.18182 6.95966 10.681 5.10466 10.681C3.24966 10.681 1.75049 9.18182 1.75049 7.32682C1.75049 5.47182 3.24966 3.97266 5.10466 3.97266"
                                                stroke="#1C0C13" stroke-width="0.875" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M6.41699 7.32715C6.41699 5.39632 7.98616 3.82715 9.91699 3.82715C11.8478 3.82715 13.417 5.39632 13.417 7.32715C13.417 9.25798 11.8478 10.8271 9.91699 10.8271"
                                                stroke="#1C0C13" stroke-width="0.875" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg> Edit</button>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="tab-pane fade" id="voices" role="tabpanel" aria-labelledby="voices-tab">
                    <div class="pt-xxl-3">
                        <div class="projects">

                            <div class="pt-xxl-3">
                                <p class="public">Permissions and sharing </p>
                                <br>
                                <button class="import-btn1">
                                    <p class="invite"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path
                                                d="M12 22C17.5 22 22 17.5 22 12C22 6.5 17.5 2 12 2C6.5 2 2 6.5 2 12C2 17.5 6.5 22 12 22Z"
                                                stroke="url(#paint0_linear_553_728)" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M12 8V13" stroke="url(#paint1_linear_553_728)" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M11.9946 16H12.0036" stroke="url(#paint2_linear_553_728)"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <defs>
                                                <linearGradient id="paint0_linear_553_728" x1="-2.13158" y1="-0.424242"
                                                    x2="27.0384" y2="0.455434" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#A93178" />
                                                    <stop offset="1" stop-color="#F99D44" />
                                                </linearGradient>
                                                <linearGradient id="paint1_linear_553_728" x1="11.7934" y1="7.39394"
                                                    x2="13.2532" y2="7.40274" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#A93178" />
                                                    <stop offset="1" stop-color="#F99D44" />
                                                </linearGradient>
                                                <linearGradient id="paint2_linear_553_728" x1="11.9928" y1="15.8788"
                                                    x2="12.0059" y2="15.8788" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#A93178" />
                                                    <stop offset="1" stop-color="#F99D44" />
                                                </linearGradient>
                                            </defs>
                                        </svg> Changes made here will only apply to newly created gammas, not existing
                                        ones
                                    </p>
                                </button>
                            </div>
                            <br>

                        </div>
                        <br>
                        <div class="col-md-12">
                            <div class="marco-card">
                                <div class="marco-left-section">
                                    <img src="assets/images/voice/comp2.png" alt="">
                                    <div class="marco-text-block">
                                        <div class="title">Workspace members</div>
                                        <div class="text2">Controls whether new prezently can be accessed by anyone in
                                            this workspace</div>
                                    </div>
                                </div>


                                <div class="marco-right-section">
                                    <button class="access"><svg xmlns="http://www.w3.org/2000/svg" width="15"
                                            height="15" viewBox="0 0 15 15" fill="none">
                                            <path
                                                d="M8.45882 7.32682C8.45882 9.18182 6.95966 10.681 5.10466 10.681C3.24966 10.681 1.75049 9.18182 1.75049 7.32682C1.75049 5.47182 3.24966 3.97266 5.10466 3.97266"
                                                stroke="#1C0C13" stroke-width="0.875" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M6.41699 7.32715C6.41699 5.39632 7.98616 3.82715 9.91699 3.82715C11.8478 3.82715 13.417 5.39632 13.417 7.32715C13.417 9.25798 11.8478 10.8271 9.91699 10.8271"
                                                stroke="#1C0C13" stroke-width="0.875" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg> Full Access</button>
                                </div>

                            </div>
                        </div>
                        <br>

                    </div>
                    <br>

                    <br>

                </div>
                <div class="tab-pane fade" id="collections" role="tabpanel" aria-labelledby="collections-tab">
                    <div class="pt-xxl-3">
                        <div class="projects">

                            <div class="pt-xxl-3">
                                <p class="public"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="25"
                                        viewBox="0 0 24 25" fill="none">
                                        <path d="M6 10.5V8.5C6 5.19 7 2.5 12 2.5C17 2.5 18 5.19 18 8.5V10.5"
                                            stroke="#1C0C13" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M12 19C13.3807 19 14.5 17.8807 14.5 16.5C14.5 15.1193 13.3807 14 12 14C10.6193 14 9.5 15.1193 9.5 16.5C9.5 17.8807 10.6193 19 12 19Z"
                                            stroke="#1C0C13" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M17 22.5H7C3 22.5 2 21.5 2 17.5V15.5C2 11.5 3 10.5 7 10.5H17C21 10.5 22 11.5 22 15.5V17.5C22 21.5 21 22.5 17 22.5Z"
                                            stroke="#1C0C13" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg> Epic Voices <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25"
                                        viewBox="0 0 24 25" fill="none">
                                        <path
                                            d="M8.94995 4.57992L15.47 11.0999C16.24 11.8699 16.24 13.1299 15.47 13.8999L8.94995 20.4199"
                                            stroke="#BDBDBD" stroke-width="1.5" stroke-miterlimit="10"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg></p>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="project-card">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="p-15">
                                                    <img src="assets/images/voice/voice.png" alt="">
                                                </div>

                                            </div>
                                            <div class="col-md-9">
                                                <div class="p-15">
                                                    <h3>Ivanna - Young & Casual</h3>
                                                    <p class="last">Conversational</p>
                                                    <div class=" user-info">

                                                        <img src="assets/images/logo/user1.png" alt="">
                                                        <div class="text">

                                                            <p>Created by Lvanna<br><span class="last">uploaded 20 day’s
                                                                    ago</span></p>
                                                        </div>
                                                        <div class=" dropdown-toggle" data-bs-toggle="dropdown"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="20"
                                                                height="24" viewBox="0 0 20 24" fill="none">
                                                                <path
                                                                    d="M9.66645 19.6373C9.19901 19.6373 8.75071 19.4516 8.42018 19.1211C8.08965 18.7905 7.90395 18.3422 7.90395 17.8748C7.90395 17.4074 8.08965 16.9591 8.42018 16.6285C8.75071 16.298 9.19901 16.1123 9.66645 16.1123C10.1339 16.1123 10.5822 16.298 10.9127 16.6285C11.2433 16.9591 11.429 17.4074 11.429 17.8748C11.429 18.3422 11.2433 18.7905 10.9127 19.1211C10.5822 19.4516 10.1339 19.6373 9.66645 19.6373ZM9.66645 13.7623C9.435 13.7623 9.20581 13.7167 8.99197 13.6281C8.77814 13.5396 8.58384 13.4097 8.42018 13.2461C8.25652 13.0824 8.12669 12.8881 8.03812 12.6743C7.94954 12.4604 7.90395 12.2313 7.90395 11.9998C7.90395 11.7683 7.94954 11.5392 8.03812 11.3253C8.12669 11.1115 8.25652 10.9172 8.42018 10.7535C8.58384 10.5899 8.77814 10.46 8.99198 10.3715C9.20581 10.2829 9.435 10.2373 9.66645 10.2373C9.89791 10.2373 10.1271 10.2829 10.3409 10.3715C10.5548 10.46 10.7491 10.5899 10.9127 10.7535C11.0764 10.9172 11.2062 11.1115 11.2948 11.3253C11.3834 11.5392 11.429 11.7684 11.429 11.9998C11.429 12.2313 11.3834 12.4604 11.2948 12.6743C11.2062 12.8881 11.0764 13.0824 10.9127 13.2461C10.7491 13.4097 10.5548 13.5396 10.3409 13.6281C10.1271 13.7167 9.89791 13.7623 9.66645 13.7623ZM7.90395 6.1248C7.90395 5.65736 8.08965 5.20906 8.42018 4.87853C8.75071 4.548 9.19901 4.3623 9.66646 4.3623C10.1339 4.3623 10.5822 4.548 10.9127 4.87853C11.2433 5.20906 11.429 5.65736 11.429 6.1248C11.429 6.59225 11.2433 7.04055 10.9127 7.37108C10.5822 7.70161 10.1339 7.8873 9.66645 7.8873C9.19901 7.8873 8.75071 7.70161 8.42018 7.37108C8.08965 7.04055 7.90395 6.59225 7.90395 6.1248Z"
                                                                    fill="#ADA8A8" />
                                                            </svg> </div>

                                                        <!-- Dropdown Menu -->
                                                        <div class="dropdown-menu p-3 text-muted form-wrapper">
                                                            <p class="mb-2 foler"><svg
                                                                    xmlns="http://www.w3.org/2000/svg" width="17"
                                                                    height="17" viewBox="0 0 17 17" fill="none">
                                                                    <path
                                                                        d="M9.72547 2.48637L10.9721 4.9797C11.1421 5.32678 11.5955 5.6597 11.978 5.72345L14.2376 6.09887C15.6826 6.3397 16.0226 7.38803 14.9813 8.4222L13.2246 10.1789C12.9271 10.4764 12.7642 11.0501 12.8563 11.461L13.3592 13.6355C13.7559 15.3568 12.8421 16.0226 11.3192 15.123L9.20131 13.8693C8.81881 13.6426 8.18839 13.6426 7.79881 13.8693L5.68089 15.123C4.16506 16.0226 3.24422 15.3497 3.64089 13.6355L4.14381 11.461C4.23589 11.0501 4.07297 10.4764 3.77547 10.1789L2.01881 8.4222C0.984641 7.38803 1.31756 6.3397 2.76256 6.09887L5.02214 5.72345C5.39756 5.6597 5.85089 5.32678 6.02089 4.9797L7.26756 2.48637C7.94756 1.13345 9.05256 1.13345 9.72547 2.48637Z"
                                                                        stroke="#1C0C13" stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </svg> Add to Collection</p>
                                                            <p class="mb-2 foler"><svg
                                                                    xmlns="http://www.w3.org/2000/svg" width="17"
                                                                    height="17" viewBox="0 0 17 17" fill="none">
                                                                    <path
                                                                        d="M11.3334 9.13734V12.1123C11.3334 14.5915 10.3417 15.5832 7.86258 15.5832H4.88758C2.40841 15.5832 1.41675 14.5915 1.41675 12.1123V9.13734C1.41675 6.65817 2.40841 5.6665 4.88758 5.6665H7.86258C10.3417 5.6665 11.3334 6.65817 11.3334 9.13734Z"
                                                                        stroke="#1C0C13" stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                    <path
                                                                        d="M15.5834 4.88734V7.86234C15.5834 10.3415 14.5917 11.3332 12.1126 11.3332H11.3334V9.13734C11.3334 6.65817 10.3417 5.6665 7.86258 5.6665H5.66675V4.88734C5.66675 2.40817 6.65841 1.4165 9.13758 1.4165H12.1126C14.5917 1.4165 15.5834 2.40817 15.5834 4.88734Z"
                                                                        stroke="#1C0C13" stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </svg> Copy voice ID</p>
                                                            <p class="mb-0 foler"><svg
                                                                    xmlns="http://www.w3.org/2000/svg" width="17"
                                                                    height="17" viewBox="0 0 17 17" fill="none">
                                                                    <path
                                                                        d="M10.6179 12.3957H11.6875C13.8267 12.3957 15.5833 10.6461 15.5833 8.49984C15.5833 6.36067 13.8338 4.604 11.6875 4.604H10.6179"
                                                                        stroke="#1C0C13" stroke-width="1.0625"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                    <path
                                                                        d="M6.37508 4.604H5.31258C3.16633 4.604 1.41675 6.35359 1.41675 8.49984C1.41675 10.639 3.16633 12.3957 5.31258 12.3957H6.37508"
                                                                        stroke="#1C0C13" stroke-width="1.0625"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                    <path d="M5.66675 8.5H11.3334" stroke="#1C0C13"
                                                                        stroke-width="1.0625" stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </svg> Copy link</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="project-card">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="p-15">
                                                    <img src="assets/images/voice/voice.png" alt="">
                                                </div>

                                            </div>
                                            <div class="col-md-9">
                                                <div class="p-15">
                                                    <h3>Ivanna - Young & Casual</h3>
                                                    <p class="last">Engaging</p>
                                                    <div class=" user-info">

                                                        <img src="assets/images/logo/user1.png" alt="">
                                                        <div class="text">

                                                            <p>Created by Lvanna<br><span class="last">uploaded 20 day’s
                                                                    ago</span></p>
                                                        </div>
                                                        <div class=" dropdown-toggle" data-bs-toggle="dropdown"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="20"
                                                                height="24" viewBox="0 0 20 24" fill="none">
                                                                <path
                                                                    d="M9.66645 19.6373C9.19901 19.6373 8.75071 19.4516 8.42018 19.1211C8.08965 18.7905 7.90395 18.3422 7.90395 17.8748C7.90395 17.4074 8.08965 16.9591 8.42018 16.6285C8.75071 16.298 9.19901 16.1123 9.66645 16.1123C10.1339 16.1123 10.5822 16.298 10.9127 16.6285C11.2433 16.9591 11.429 17.4074 11.429 17.8748C11.429 18.3422 11.2433 18.7905 10.9127 19.1211C10.5822 19.4516 10.1339 19.6373 9.66645 19.6373ZM9.66645 13.7623C9.435 13.7623 9.20581 13.7167 8.99197 13.6281C8.77814 13.5396 8.58384 13.4097 8.42018 13.2461C8.25652 13.0824 8.12669 12.8881 8.03812 12.6743C7.94954 12.4604 7.90395 12.2313 7.90395 11.9998C7.90395 11.7683 7.94954 11.5392 8.03812 11.3253C8.12669 11.1115 8.25652 10.9172 8.42018 10.7535C8.58384 10.5899 8.77814 10.46 8.99198 10.3715C9.20581 10.2829 9.435 10.2373 9.66645 10.2373C9.89791 10.2373 10.1271 10.2829 10.3409 10.3715C10.5548 10.46 10.7491 10.5899 10.9127 10.7535C11.0764 10.9172 11.2062 11.1115 11.2948 11.3253C11.3834 11.5392 11.429 11.7684 11.429 11.9998C11.429 12.2313 11.3834 12.4604 11.2948 12.6743C11.2062 12.8881 11.0764 13.0824 10.9127 13.2461C10.7491 13.4097 10.5548 13.5396 10.3409 13.6281C10.1271 13.7167 9.89791 13.7623 9.66645 13.7623ZM7.90395 6.1248C7.90395 5.65736 8.08965 5.20906 8.42018 4.87853C8.75071 4.548 9.19901 4.3623 9.66646 4.3623C10.1339 4.3623 10.5822 4.548 10.9127 4.87853C11.2433 5.20906 11.429 5.65736 11.429 6.1248C11.429 6.59225 11.2433 7.04055 10.9127 7.37108C10.5822 7.70161 10.1339 7.8873 9.66645 7.8873C9.19901 7.8873 8.75071 7.70161 8.42018 7.37108C8.08965 7.04055 7.90395 6.59225 7.90395 6.1248Z"
                                                                    fill="#ADA8A8" />
                                                            </svg> </div>

                                                        <!-- Dropdown Menu -->
                                                        <div class="dropdown-menu p-3 text-muted form-wrapper">
                                                            <p class="mb-2 foler"><svg
                                                                    xmlns="http://www.w3.org/2000/svg" width="17"
                                                                    height="17" viewBox="0 0 17 17" fill="none">
                                                                    <path
                                                                        d="M9.72547 2.48637L10.9721 4.9797C11.1421 5.32678 11.5955 5.6597 11.978 5.72345L14.2376 6.09887C15.6826 6.3397 16.0226 7.38803 14.9813 8.4222L13.2246 10.1789C12.9271 10.4764 12.7642 11.0501 12.8563 11.461L13.3592 13.6355C13.7559 15.3568 12.8421 16.0226 11.3192 15.123L9.20131 13.8693C8.81881 13.6426 8.18839 13.6426 7.79881 13.8693L5.68089 15.123C4.16506 16.0226 3.24422 15.3497 3.64089 13.6355L4.14381 11.461C4.23589 11.0501 4.07297 10.4764 3.77547 10.1789L2.01881 8.4222C0.984641 7.38803 1.31756 6.3397 2.76256 6.09887L5.02214 5.72345C5.39756 5.6597 5.85089 5.32678 6.02089 4.9797L7.26756 2.48637C7.94756 1.13345 9.05256 1.13345 9.72547 2.48637Z"
                                                                        stroke="#1C0C13" stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </svg> Add to Collection</p>
                                                            <p class="mb-2 foler"><svg
                                                                    xmlns="http://www.w3.org/2000/svg" width="17"
                                                                    height="17" viewBox="0 0 17 17" fill="none">
                                                                    <path
                                                                        d="M11.3334 9.13734V12.1123C11.3334 14.5915 10.3417 15.5832 7.86258 15.5832H4.88758C2.40841 15.5832 1.41675 14.5915 1.41675 12.1123V9.13734C1.41675 6.65817 2.40841 5.6665 4.88758 5.6665H7.86258C10.3417 5.6665 11.3334 6.65817 11.3334 9.13734Z"
                                                                        stroke="#1C0C13" stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                    <path
                                                                        d="M15.5834 4.88734V7.86234C15.5834 10.3415 14.5917 11.3332 12.1126 11.3332H11.3334V9.13734C11.3334 6.65817 10.3417 5.6665 7.86258 5.6665H5.66675V4.88734C5.66675 2.40817 6.65841 1.4165 9.13758 1.4165H12.1126C14.5917 1.4165 15.5834 2.40817 15.5834 4.88734Z"
                                                                        stroke="#1C0C13" stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </svg> Copy voice ID</p>
                                                            <p class="mb-0 foler"><svg
                                                                    xmlns="http://www.w3.org/2000/svg" width="17"
                                                                    height="17" viewBox="0 0 17 17" fill="none">
                                                                    <path
                                                                        d="M10.6179 12.3957H11.6875C13.8267 12.3957 15.5833 10.6461 15.5833 8.49984C15.5833 6.36067 13.8338 4.604 11.6875 4.604H10.6179"
                                                                        stroke="#1C0C13" stroke-width="1.0625"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                    <path
                                                                        d="M6.37508 4.604H5.31258C3.16633 4.604 1.41675 6.35359 1.41675 8.49984C1.41675 10.639 3.16633 12.3957 5.31258 12.3957H6.37508"
                                                                        stroke="#1C0C13" stroke-width="1.0625"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                    <path d="M5.66675 8.5H11.3334" stroke="#1C0C13"
                                                                        stroke-width="1.0625" stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </svg> Copy link</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="project-card">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="p-15">
                                                    <img src="assets/images/voice/voice.png" alt="">
                                                </div>

                                            </div>
                                            <div class="col-md-9">
                                                <div class="p-15">
                                                    <h3>Ivanna - Young & Casual</h3>
                                                    <p class="last">Formal</p>
                                                    <div class=" user-info">

                                                        <img src="assets/images/logo/user1.png" alt="">
                                                        <div class="text">

                                                            <p>Created by Lvanna<br><span class="last">uploaded 20 day’s
                                                                    ago</span></p>
                                                        </div>
                                                        <div class=" dropdown-toggle" data-bs-toggle="dropdown"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="20"
                                                                height="24" viewBox="0 0 20 24" fill="none">
                                                                <path
                                                                    d="M9.66645 19.6373C9.19901 19.6373 8.75071 19.4516 8.42018 19.1211C8.08965 18.7905 7.90395 18.3422 7.90395 17.8748C7.90395 17.4074 8.08965 16.9591 8.42018 16.6285C8.75071 16.298 9.19901 16.1123 9.66645 16.1123C10.1339 16.1123 10.5822 16.298 10.9127 16.6285C11.2433 16.9591 11.429 17.4074 11.429 17.8748C11.429 18.3422 11.2433 18.7905 10.9127 19.1211C10.5822 19.4516 10.1339 19.6373 9.66645 19.6373ZM9.66645 13.7623C9.435 13.7623 9.20581 13.7167 8.99197 13.6281C8.77814 13.5396 8.58384 13.4097 8.42018 13.2461C8.25652 13.0824 8.12669 12.8881 8.03812 12.6743C7.94954 12.4604 7.90395 12.2313 7.90395 11.9998C7.90395 11.7683 7.94954 11.5392 8.03812 11.3253C8.12669 11.1115 8.25652 10.9172 8.42018 10.7535C8.58384 10.5899 8.77814 10.46 8.99198 10.3715C9.20581 10.2829 9.435 10.2373 9.66645 10.2373C9.89791 10.2373 10.1271 10.2829 10.3409 10.3715C10.5548 10.46 10.7491 10.5899 10.9127 10.7535C11.0764 10.9172 11.2062 11.1115 11.2948 11.3253C11.3834 11.5392 11.429 11.7684 11.429 11.9998C11.429 12.2313 11.3834 12.4604 11.2948 12.6743C11.2062 12.8881 11.0764 13.0824 10.9127 13.2461C10.7491 13.4097 10.5548 13.5396 10.3409 13.6281C10.1271 13.7167 9.89791 13.7623 9.66645 13.7623ZM7.90395 6.1248C7.90395 5.65736 8.08965 5.20906 8.42018 4.87853C8.75071 4.548 9.19901 4.3623 9.66646 4.3623C10.1339 4.3623 10.5822 4.548 10.9127 4.87853C11.2433 5.20906 11.429 5.65736 11.429 6.1248C11.429 6.59225 11.2433 7.04055 10.9127 7.37108C10.5822 7.70161 10.1339 7.8873 9.66645 7.8873C9.19901 7.8873 8.75071 7.70161 8.42018 7.37108C8.08965 7.04055 7.90395 6.59225 7.90395 6.1248Z"
                                                                    fill="#ADA8A8" />
                                                            </svg> </div>

                                                        <!-- Dropdown Menu -->
                                                        <div class="dropdown-menu p-3 text-muted form-wrapper">
                                                            <p class="mb-2 foler"><svg
                                                                    xmlns="http://www.w3.org/2000/svg" width="17"
                                                                    height="17" viewBox="0 0 17 17" fill="none">
                                                                    <path
                                                                        d="M9.72547 2.48637L10.9721 4.9797C11.1421 5.32678 11.5955 5.6597 11.978 5.72345L14.2376 6.09887C15.6826 6.3397 16.0226 7.38803 14.9813 8.4222L13.2246 10.1789C12.9271 10.4764 12.7642 11.0501 12.8563 11.461L13.3592 13.6355C13.7559 15.3568 12.8421 16.0226 11.3192 15.123L9.20131 13.8693C8.81881 13.6426 8.18839 13.6426 7.79881 13.8693L5.68089 15.123C4.16506 16.0226 3.24422 15.3497 3.64089 13.6355L4.14381 11.461C4.23589 11.0501 4.07297 10.4764 3.77547 10.1789L2.01881 8.4222C0.984641 7.38803 1.31756 6.3397 2.76256 6.09887L5.02214 5.72345C5.39756 5.6597 5.85089 5.32678 6.02089 4.9797L7.26756 2.48637C7.94756 1.13345 9.05256 1.13345 9.72547 2.48637Z"
                                                                        stroke="#1C0C13" stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </svg> Add to Collection</p>
                                                            <p class="mb-2 foler"><svg
                                                                    xmlns="http://www.w3.org/2000/svg" width="17"
                                                                    height="17" viewBox="0 0 17 17" fill="none">
                                                                    <path
                                                                        d="M11.3334 9.13734V12.1123C11.3334 14.5915 10.3417 15.5832 7.86258 15.5832H4.88758C2.40841 15.5832 1.41675 14.5915 1.41675 12.1123V9.13734C1.41675 6.65817 2.40841 5.6665 4.88758 5.6665H7.86258C10.3417 5.6665 11.3334 6.65817 11.3334 9.13734Z"
                                                                        stroke="#1C0C13" stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                    <path
                                                                        d="M15.5834 4.88734V7.86234C15.5834 10.3415 14.5917 11.3332 12.1126 11.3332H11.3334V9.13734C11.3334 6.65817 10.3417 5.6665 7.86258 5.6665H5.66675V4.88734C5.66675 2.40817 6.65841 1.4165 9.13758 1.4165H12.1126C14.5917 1.4165 15.5834 2.40817 15.5834 4.88734Z"
                                                                        stroke="#1C0C13" stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </svg> Copy voice ID</p>
                                                            <p class="mb-0 foler"><svg
                                                                    xmlns="http://www.w3.org/2000/svg" width="17"
                                                                    height="17" viewBox="0 0 17 17" fill="none">
                                                                    <path
                                                                        d="M10.6179 12.3957H11.6875C13.8267 12.3957 15.5833 10.6461 15.5833 8.49984C15.5833 6.36067 13.8338 4.604 11.6875 4.604H10.6179"
                                                                        stroke="#1C0C13" stroke-width="1.0625"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                    <path
                                                                        d="M6.37508 4.604H5.31258C3.16633 4.604 1.41675 6.35359 1.41675 8.49984C1.41675 10.639 3.16633 12.3957 5.31258 12.3957H6.37508"
                                                                        stroke="#1C0C13" stroke-width="1.0625"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                    <path d="M5.66675 8.5H11.3334" stroke="#1C0C13"
                                                                        stroke-width="1.0625" stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </svg> Copy link</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>


                            </div>

                            <br>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="project-card">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="p-15">
                                                    <img src="assets/images/voice/voice.png" alt="">
                                                </div>

                                            </div>
                                            <div class="col-md-9">
                                                <div class="p-15">
                                                    <h3>Ivanna - Young & Casual</h3>
                                                    <p class="last">Formal</p>
                                                    <div class=" user-info">

                                                        <img src="assets/images/logo/user1.png" alt="">
                                                        <div class="text">

                                                            <p>Created by Lvanna<br><span class="last">uploaded 20 day’s
                                                                    ago</span></p>
                                                        </div>
                                                        <div class=" dropdown-toggle" data-bs-toggle="dropdown"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="20"
                                                                height="24" viewBox="0 0 20 24" fill="none">
                                                                <path
                                                                    d="M9.66645 19.6373C9.19901 19.6373 8.75071 19.4516 8.42018 19.1211C8.08965 18.7905 7.90395 18.3422 7.90395 17.8748C7.90395 17.4074 8.08965 16.9591 8.42018 16.6285C8.75071 16.298 9.19901 16.1123 9.66645 16.1123C10.1339 16.1123 10.5822 16.298 10.9127 16.6285C11.2433 16.9591 11.429 17.4074 11.429 17.8748C11.429 18.3422 11.2433 18.7905 10.9127 19.1211C10.5822 19.4516 10.1339 19.6373 9.66645 19.6373ZM9.66645 13.7623C9.435 13.7623 9.20581 13.7167 8.99197 13.6281C8.77814 13.5396 8.58384 13.4097 8.42018 13.2461C8.25652 13.0824 8.12669 12.8881 8.03812 12.6743C7.94954 12.4604 7.90395 12.2313 7.90395 11.9998C7.90395 11.7683 7.94954 11.5392 8.03812 11.3253C8.12669 11.1115 8.25652 10.9172 8.42018 10.7535C8.58384 10.5899 8.77814 10.46 8.99198 10.3715C9.20581 10.2829 9.435 10.2373 9.66645 10.2373C9.89791 10.2373 10.1271 10.2829 10.3409 10.3715C10.5548 10.46 10.7491 10.5899 10.9127 10.7535C11.0764 10.9172 11.2062 11.1115 11.2948 11.3253C11.3834 11.5392 11.429 11.7684 11.429 11.9998C11.429 12.2313 11.3834 12.4604 11.2948 12.6743C11.2062 12.8881 11.0764 13.0824 10.9127 13.2461C10.7491 13.4097 10.5548 13.5396 10.3409 13.6281C10.1271 13.7167 9.89791 13.7623 9.66645 13.7623ZM7.90395 6.1248C7.90395 5.65736 8.08965 5.20906 8.42018 4.87853C8.75071 4.548 9.19901 4.3623 9.66646 4.3623C10.1339 4.3623 10.5822 4.548 10.9127 4.87853C11.2433 5.20906 11.429 5.65736 11.429 6.1248C11.429 6.59225 11.2433 7.04055 10.9127 7.37108C10.5822 7.70161 10.1339 7.8873 9.66645 7.8873C9.19901 7.8873 8.75071 7.70161 8.42018 7.37108C8.08965 7.04055 7.90395 6.59225 7.90395 6.1248Z"
                                                                    fill="#ADA8A8" />
                                                            </svg> </div>

                                                        <!-- Dropdown Menu -->
                                                        <div class="dropdown-menu p-3 text-muted form-wrapper">
                                                            <p class="mb-2 foler"><svg
                                                                    xmlns="http://www.w3.org/2000/svg" width="17"
                                                                    height="17" viewBox="0 0 17 17" fill="none">
                                                                    <path
                                                                        d="M9.72547 2.48637L10.9721 4.9797C11.1421 5.32678 11.5955 5.6597 11.978 5.72345L14.2376 6.09887C15.6826 6.3397 16.0226 7.38803 14.9813 8.4222L13.2246 10.1789C12.9271 10.4764 12.7642 11.0501 12.8563 11.461L13.3592 13.6355C13.7559 15.3568 12.8421 16.0226 11.3192 15.123L9.20131 13.8693C8.81881 13.6426 8.18839 13.6426 7.79881 13.8693L5.68089 15.123C4.16506 16.0226 3.24422 15.3497 3.64089 13.6355L4.14381 11.461C4.23589 11.0501 4.07297 10.4764 3.77547 10.1789L2.01881 8.4222C0.984641 7.38803 1.31756 6.3397 2.76256 6.09887L5.02214 5.72345C5.39756 5.6597 5.85089 5.32678 6.02089 4.9797L7.26756 2.48637C7.94756 1.13345 9.05256 1.13345 9.72547 2.48637Z"
                                                                        stroke="#1C0C13" stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </svg> Add to Collection</p>
                                                            <p class="mb-2 foler"><svg
                                                                    xmlns="http://www.w3.org/2000/svg" width="17"
                                                                    height="17" viewBox="0 0 17 17" fill="none">
                                                                    <path
                                                                        d="M11.3334 9.13734V12.1123C11.3334 14.5915 10.3417 15.5832 7.86258 15.5832H4.88758C2.40841 15.5832 1.41675 14.5915 1.41675 12.1123V9.13734C1.41675 6.65817 2.40841 5.6665 4.88758 5.6665H7.86258C10.3417 5.6665 11.3334 6.65817 11.3334 9.13734Z"
                                                                        stroke="#1C0C13" stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                    <path
                                                                        d="M15.5834 4.88734V7.86234C15.5834 10.3415 14.5917 11.3332 12.1126 11.3332H11.3334V9.13734C11.3334 6.65817 10.3417 5.6665 7.86258 5.6665H5.66675V4.88734C5.66675 2.40817 6.65841 1.4165 9.13758 1.4165H12.1126C14.5917 1.4165 15.5834 2.40817 15.5834 4.88734Z"
                                                                        stroke="#1C0C13" stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </svg> Copy voice ID</p>
                                                            <p class="mb-0 foler"><svg
                                                                    xmlns="http://www.w3.org/2000/svg" width="17"
                                                                    height="17" viewBox="0 0 17 17" fill="none">
                                                                    <path
                                                                        d="M10.6179 12.3957H11.6875C13.8267 12.3957 15.5833 10.6461 15.5833 8.49984C15.5833 6.36067 13.8338 4.604 11.6875 4.604H10.6179"
                                                                        stroke="#1C0C13" stroke-width="1.0625"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                    <path
                                                                        d="M6.37508 4.604H5.31258C3.16633 4.604 1.41675 6.35359 1.41675 8.49984C1.41675 10.639 3.16633 12.3957 5.31258 12.3957H6.37508"
                                                                        stroke="#1C0C13" stroke-width="1.0625"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                    <path d="M5.66675 8.5H11.3334" stroke="#1C0C13"
                                                                        stroke-width="1.0625" stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </svg> Copy link</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="project-card">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="p-15">
                                                    <img src="assets/images/voice/voice.png" alt="">
                                                </div>

                                            </div>
                                            <div class="col-md-9">
                                                <div class="p-15">
                                                    <h3>Ivanna - Young & Casual</h3>
                                                    <p class="last">Formal</p>
                                                    <div class=" user-info">

                                                        <img src="assets/images/logo/user1.png" alt="">
                                                        <div class="text">

                                                            <p>Created by Lvanna<br><span class="last">uploaded 20 day’s
                                                                    ago</span></p>
                                                        </div>
                                                        <div class=" dropdown-toggle" data-bs-toggle="dropdown"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="20"
                                                                height="24" viewBox="0 0 20 24" fill="none">
                                                                <path
                                                                    d="M9.66645 19.6373C9.19901 19.6373 8.75071 19.4516 8.42018 19.1211C8.08965 18.7905 7.90395 18.3422 7.90395 17.8748C7.90395 17.4074 8.08965 16.9591 8.42018 16.6285C8.75071 16.298 9.19901 16.1123 9.66645 16.1123C10.1339 16.1123 10.5822 16.298 10.9127 16.6285C11.2433 16.9591 11.429 17.4074 11.429 17.8748C11.429 18.3422 11.2433 18.7905 10.9127 19.1211C10.5822 19.4516 10.1339 19.6373 9.66645 19.6373ZM9.66645 13.7623C9.435 13.7623 9.20581 13.7167 8.99197 13.6281C8.77814 13.5396 8.58384 13.4097 8.42018 13.2461C8.25652 13.0824 8.12669 12.8881 8.03812 12.6743C7.94954 12.4604 7.90395 12.2313 7.90395 11.9998C7.90395 11.7683 7.94954 11.5392 8.03812 11.3253C8.12669 11.1115 8.25652 10.9172 8.42018 10.7535C8.58384 10.5899 8.77814 10.46 8.99198 10.3715C9.20581 10.2829 9.435 10.2373 9.66645 10.2373C9.89791 10.2373 10.1271 10.2829 10.3409 10.3715C10.5548 10.46 10.7491 10.5899 10.9127 10.7535C11.0764 10.9172 11.2062 11.1115 11.2948 11.3253C11.3834 11.5392 11.429 11.7684 11.429 11.9998C11.429 12.2313 11.3834 12.4604 11.2948 12.6743C11.2062 12.8881 11.0764 13.0824 10.9127 13.2461C10.7491 13.4097 10.5548 13.5396 10.3409 13.6281C10.1271 13.7167 9.89791 13.7623 9.66645 13.7623ZM7.90395 6.1248C7.90395 5.65736 8.08965 5.20906 8.42018 4.87853C8.75071 4.548 9.19901 4.3623 9.66646 4.3623C10.1339 4.3623 10.5822 4.548 10.9127 4.87853C11.2433 5.20906 11.429 5.65736 11.429 6.1248C11.429 6.59225 11.2433 7.04055 10.9127 7.37108C10.5822 7.70161 10.1339 7.8873 9.66645 7.8873C9.19901 7.8873 8.75071 7.70161 8.42018 7.37108C8.08965 7.04055 7.90395 6.59225 7.90395 6.1248Z"
                                                                    fill="#ADA8A8" />
                                                            </svg> </div>

                                                        <!-- Dropdown Menu -->
                                                        <div class="dropdown-menu p-3 text-muted form-wrapper">
                                                            <p class="mb-2 foler"><svg
                                                                    xmlns="http://www.w3.org/2000/svg" width="17"
                                                                    height="17" viewBox="0 0 17 17" fill="none">
                                                                    <path
                                                                        d="M9.72547 2.48637L10.9721 4.9797C11.1421 5.32678 11.5955 5.6597 11.978 5.72345L14.2376 6.09887C15.6826 6.3397 16.0226 7.38803 14.9813 8.4222L13.2246 10.1789C12.9271 10.4764 12.7642 11.0501 12.8563 11.461L13.3592 13.6355C13.7559 15.3568 12.8421 16.0226 11.3192 15.123L9.20131 13.8693C8.81881 13.6426 8.18839 13.6426 7.79881 13.8693L5.68089 15.123C4.16506 16.0226 3.24422 15.3497 3.64089 13.6355L4.14381 11.461C4.23589 11.0501 4.07297 10.4764 3.77547 10.1789L2.01881 8.4222C0.984641 7.38803 1.31756 6.3397 2.76256 6.09887L5.02214 5.72345C5.39756 5.6597 5.85089 5.32678 6.02089 4.9797L7.26756 2.48637C7.94756 1.13345 9.05256 1.13345 9.72547 2.48637Z"
                                                                        stroke="#1C0C13" stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </svg> Add to Collection</p>
                                                            <p class="mb-2 foler"><svg
                                                                    xmlns="http://www.w3.org/2000/svg" width="17"
                                                                    height="17" viewBox="0 0 17 17" fill="none">
                                                                    <path
                                                                        d="M11.3334 9.13734V12.1123C11.3334 14.5915 10.3417 15.5832 7.86258 15.5832H4.88758C2.40841 15.5832 1.41675 14.5915 1.41675 12.1123V9.13734C1.41675 6.65817 2.40841 5.6665 4.88758 5.6665H7.86258C10.3417 5.6665 11.3334 6.65817 11.3334 9.13734Z"
                                                                        stroke="#1C0C13" stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                    <path
                                                                        d="M15.5834 4.88734V7.86234C15.5834 10.3415 14.5917 11.3332 12.1126 11.3332H11.3334V9.13734C11.3334 6.65817 10.3417 5.6665 7.86258 5.6665H5.66675V4.88734C5.66675 2.40817 6.65841 1.4165 9.13758 1.4165H12.1126C14.5917 1.4165 15.5834 2.40817 15.5834 4.88734Z"
                                                                        stroke="#1C0C13" stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </svg> Copy voice ID</p>
                                                            <p class="mb-0 foler"><svg
                                                                    xmlns="http://www.w3.org/2000/svg" width="17"
                                                                    height="17" viewBox="0 0 17 17" fill="none">
                                                                    <path
                                                                        d="M10.6179 12.3957H11.6875C13.8267 12.3957 15.5833 10.6461 15.5833 8.49984C15.5833 6.36067 13.8338 4.604 11.6875 4.604H10.6179"
                                                                        stroke="#1C0C13" stroke-width="1.0625"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                    <path
                                                                        d="M6.37508 4.604H5.31258C3.16633 4.604 1.41675 6.35359 1.41675 8.49984C1.41675 10.639 3.16633 12.3957 5.31258 12.3957H6.37508"
                                                                        stroke="#1C0C13" stroke-width="1.0625"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                    <path d="M5.66675 8.5H11.3334" stroke="#1C0C13"
                                                                        stroke-width="1.0625" stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </svg> Copy link</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="project-card">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="p-15">
                                                    <img src="assets/images/voice/voice.png" alt="">
                                                </div>

                                            </div>
                                            <div class="col-md-9">
                                                <div class="p-15">
                                                    <h3>Ivanna - Young & Casual</h3>
                                                    <p class="last">Formal</p>
                                                    <div class=" user-info">

                                                        <img src="assets/images/logo/user1.png" alt="">
                                                        <div class="text">

                                                            <p>Created by Lvanna<br><span class="last">uploaded 20 day’s
                                                                    ago</span></p>
                                                        </div>
                                                        <div class=" dropdown-toggle" data-bs-toggle="dropdown"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="20"
                                                                height="24" viewBox="0 0 20 24" fill="none">
                                                                <path
                                                                    d="M9.66645 19.6373C9.19901 19.6373 8.75071 19.4516 8.42018 19.1211C8.08965 18.7905 7.90395 18.3422 7.90395 17.8748C7.90395 17.4074 8.08965 16.9591 8.42018 16.6285C8.75071 16.298 9.19901 16.1123 9.66645 16.1123C10.1339 16.1123 10.5822 16.298 10.9127 16.6285C11.2433 16.9591 11.429 17.4074 11.429 17.8748C11.429 18.3422 11.2433 18.7905 10.9127 19.1211C10.5822 19.4516 10.1339 19.6373 9.66645 19.6373ZM9.66645 13.7623C9.435 13.7623 9.20581 13.7167 8.99197 13.6281C8.77814 13.5396 8.58384 13.4097 8.42018 13.2461C8.25652 13.0824 8.12669 12.8881 8.03812 12.6743C7.94954 12.4604 7.90395 12.2313 7.90395 11.9998C7.90395 11.7683 7.94954 11.5392 8.03812 11.3253C8.12669 11.1115 8.25652 10.9172 8.42018 10.7535C8.58384 10.5899 8.77814 10.46 8.99198 10.3715C9.20581 10.2829 9.435 10.2373 9.66645 10.2373C9.89791 10.2373 10.1271 10.2829 10.3409 10.3715C10.5548 10.46 10.7491 10.5899 10.9127 10.7535C11.0764 10.9172 11.2062 11.1115 11.2948 11.3253C11.3834 11.5392 11.429 11.7684 11.429 11.9998C11.429 12.2313 11.3834 12.4604 11.2948 12.6743C11.2062 12.8881 11.0764 13.0824 10.9127 13.2461C10.7491 13.4097 10.5548 13.5396 10.3409 13.6281C10.1271 13.7167 9.89791 13.7623 9.66645 13.7623ZM7.90395 6.1248C7.90395 5.65736 8.08965 5.20906 8.42018 4.87853C8.75071 4.548 9.19901 4.3623 9.66646 4.3623C10.1339 4.3623 10.5822 4.548 10.9127 4.87853C11.2433 5.20906 11.429 5.65736 11.429 6.1248C11.429 6.59225 11.2433 7.04055 10.9127 7.37108C10.5822 7.70161 10.1339 7.8873 9.66645 7.8873C9.19901 7.8873 8.75071 7.70161 8.42018 7.37108C8.08965 7.04055 7.90395 6.59225 7.90395 6.1248Z"
                                                                    fill="#ADA8A8" />
                                                            </svg> </div>

                                                        <!-- Dropdown Menu -->
                                                        <div class="dropdown-menu p-3 text-muted form-wrapper">
                                                            <p class="mb-2 foler"><svg
                                                                    xmlns="http://www.w3.org/2000/svg" width="17"
                                                                    height="17" viewBox="0 0 17 17" fill="none">
                                                                    <path
                                                                        d="M9.72547 2.48637L10.9721 4.9797C11.1421 5.32678 11.5955 5.6597 11.978 5.72345L14.2376 6.09887C15.6826 6.3397 16.0226 7.38803 14.9813 8.4222L13.2246 10.1789C12.9271 10.4764 12.7642 11.0501 12.8563 11.461L13.3592 13.6355C13.7559 15.3568 12.8421 16.0226 11.3192 15.123L9.20131 13.8693C8.81881 13.6426 8.18839 13.6426 7.79881 13.8693L5.68089 15.123C4.16506 16.0226 3.24422 15.3497 3.64089 13.6355L4.14381 11.461C4.23589 11.0501 4.07297 10.4764 3.77547 10.1789L2.01881 8.4222C0.984641 7.38803 1.31756 6.3397 2.76256 6.09887L5.02214 5.72345C5.39756 5.6597 5.85089 5.32678 6.02089 4.9797L7.26756 2.48637C7.94756 1.13345 9.05256 1.13345 9.72547 2.48637Z"
                                                                        stroke="#1C0C13" stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </svg> Add to Collection</p>
                                                            <p class="mb-2 foler"><svg
                                                                    xmlns="http://www.w3.org/2000/svg" width="17"
                                                                    height="17" viewBox="0 0 17 17" fill="none">
                                                                    <path
                                                                        d="M11.3334 9.13734V12.1123C11.3334 14.5915 10.3417 15.5832 7.86258 15.5832H4.88758C2.40841 15.5832 1.41675 14.5915 1.41675 12.1123V9.13734C1.41675 6.65817 2.40841 5.6665 4.88758 5.6665H7.86258C10.3417 5.6665 11.3334 6.65817 11.3334 9.13734Z"
                                                                        stroke="#1C0C13" stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                    <path
                                                                        d="M15.5834 4.88734V7.86234C15.5834 10.3415 14.5917 11.3332 12.1126 11.3332H11.3334V9.13734C11.3334 6.65817 10.3417 5.6665 7.86258 5.6665H5.66675V4.88734C5.66675 2.40817 6.65841 1.4165 9.13758 1.4165H12.1126C14.5917 1.4165 15.5834 2.40817 15.5834 4.88734Z"
                                                                        stroke="#1C0C13" stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </svg> Copy voice ID</p>
                                                            <p class="mb-0 foler"><svg
                                                                    xmlns="http://www.w3.org/2000/svg" width="17"
                                                                    height="17" viewBox="0 0 17 17" fill="none">
                                                                    <path
                                                                        d="M10.6179 12.3957H11.6875C13.8267 12.3957 15.5833 10.6461 15.5833 8.49984C15.5833 6.36067 13.8338 4.604 11.6875 4.604H10.6179"
                                                                        stroke="#1C0C13" stroke-width="1.0625"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                    <path
                                                                        d="M6.37508 4.604H5.31258C3.16633 4.604 1.41675 6.35359 1.41675 8.49984C1.41675 10.639 3.16633 12.3957 5.31258 12.3957H6.37508"
                                                                        stroke="#1C0C13" stroke-width="1.0625"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                    <path d="M5.66675 8.5H11.3334" stroke="#1C0C13"
                                                                        stroke-width="1.0625" stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </svg> Copy link</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>




                            </div>

                        </div>
                    </div>

                    <div class="pt-xxl-3">
                        <div class="projects">

                            <div class="pt-xxl-3">
                                <p class="public">Bring your
                                    stories to life <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25"
                                        viewBox="0 0 24 25" fill="none">
                                        <path
                                            d="M8.94995 4.57992L15.47 11.0999C16.24 11.8699 16.24 13.1299 15.47 13.8999L8.94995 20.4199"
                                            stroke="#BDBDBD" stroke-width="1.5" stroke-miterlimit="10"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg></p>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="project-card">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="p-15">
                                                    <img src="assets/images/voice/voice.png" alt="">
                                                </div>

                                            </div>
                                            <div class="col-md-9">
                                                <div class="p-15">
                                                    <h3>Ivanna - Young & Casual</h3>
                                                    <p class="last">Formal</p>
                                                    <div class=" user-info">

                                                        <img src="assets/images/logo/user1.png" alt="">
                                                        <div class="text">

                                                            <p>Created by Lvanna<br><span class="last">uploaded 20 day’s
                                                                    ago</span></p>
                                                        </div>
                                                        <div class=" dropdown-toggle" data-bs-toggle="dropdown"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="20"
                                                                height="24" viewBox="0 0 20 24" fill="none">
                                                                <path
                                                                    d="M9.66645 19.6373C9.19901 19.6373 8.75071 19.4516 8.42018 19.1211C8.08965 18.7905 7.90395 18.3422 7.90395 17.8748C7.90395 17.4074 8.08965 16.9591 8.42018 16.6285C8.75071 16.298 9.19901 16.1123 9.66645 16.1123C10.1339 16.1123 10.5822 16.298 10.9127 16.6285C11.2433 16.9591 11.429 17.4074 11.429 17.8748C11.429 18.3422 11.2433 18.7905 10.9127 19.1211C10.5822 19.4516 10.1339 19.6373 9.66645 19.6373ZM9.66645 13.7623C9.435 13.7623 9.20581 13.7167 8.99197 13.6281C8.77814 13.5396 8.58384 13.4097 8.42018 13.2461C8.25652 13.0824 8.12669 12.8881 8.03812 12.6743C7.94954 12.4604 7.90395 12.2313 7.90395 11.9998C7.90395 11.7683 7.94954 11.5392 8.03812 11.3253C8.12669 11.1115 8.25652 10.9172 8.42018 10.7535C8.58384 10.5899 8.77814 10.46 8.99198 10.3715C9.20581 10.2829 9.435 10.2373 9.66645 10.2373C9.89791 10.2373 10.1271 10.2829 10.3409 10.3715C10.5548 10.46 10.7491 10.5899 10.9127 10.7535C11.0764 10.9172 11.2062 11.1115 11.2948 11.3253C11.3834 11.5392 11.429 11.7684 11.429 11.9998C11.429 12.2313 11.3834 12.4604 11.2948 12.6743C11.2062 12.8881 11.0764 13.0824 10.9127 13.2461C10.7491 13.4097 10.5548 13.5396 10.3409 13.6281C10.1271 13.7167 9.89791 13.7623 9.66645 13.7623ZM7.90395 6.1248C7.90395 5.65736 8.08965 5.20906 8.42018 4.87853C8.75071 4.548 9.19901 4.3623 9.66646 4.3623C10.1339 4.3623 10.5822 4.548 10.9127 4.87853C11.2433 5.20906 11.429 5.65736 11.429 6.1248C11.429 6.59225 11.2433 7.04055 10.9127 7.37108C10.5822 7.70161 10.1339 7.8873 9.66645 7.8873C9.19901 7.8873 8.75071 7.70161 8.42018 7.37108C8.08965 7.04055 7.90395 6.59225 7.90395 6.1248Z"
                                                                    fill="#ADA8A8" />
                                                            </svg> </div>

                                                        <!-- Dropdown Menu -->
                                                        <div class="dropdown-menu p-3 text-muted form-wrapper">
                                                            <p class="mb-2 foler"><svg
                                                                    xmlns="http://www.w3.org/2000/svg" width="17"
                                                                    height="17" viewBox="0 0 17 17" fill="none">
                                                                    <path
                                                                        d="M9.72547 2.48637L10.9721 4.9797C11.1421 5.32678 11.5955 5.6597 11.978 5.72345L14.2376 6.09887C15.6826 6.3397 16.0226 7.38803 14.9813 8.4222L13.2246 10.1789C12.9271 10.4764 12.7642 11.0501 12.8563 11.461L13.3592 13.6355C13.7559 15.3568 12.8421 16.0226 11.3192 15.123L9.20131 13.8693C8.81881 13.6426 8.18839 13.6426 7.79881 13.8693L5.68089 15.123C4.16506 16.0226 3.24422 15.3497 3.64089 13.6355L4.14381 11.461C4.23589 11.0501 4.07297 10.4764 3.77547 10.1789L2.01881 8.4222C0.984641 7.38803 1.31756 6.3397 2.76256 6.09887L5.02214 5.72345C5.39756 5.6597 5.85089 5.32678 6.02089 4.9797L7.26756 2.48637C7.94756 1.13345 9.05256 1.13345 9.72547 2.48637Z"
                                                                        stroke="#1C0C13" stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </svg> Add to Collection</p>
                                                            <p class="mb-2 foler"><svg
                                                                    xmlns="http://www.w3.org/2000/svg" width="17"
                                                                    height="17" viewBox="0 0 17 17" fill="none">
                                                                    <path
                                                                        d="M11.3334 9.13734V12.1123C11.3334 14.5915 10.3417 15.5832 7.86258 15.5832H4.88758C2.40841 15.5832 1.41675 14.5915 1.41675 12.1123V9.13734C1.41675 6.65817 2.40841 5.6665 4.88758 5.6665H7.86258C10.3417 5.6665 11.3334 6.65817 11.3334 9.13734Z"
                                                                        stroke="#1C0C13" stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                    <path
                                                                        d="M15.5834 4.88734V7.86234C15.5834 10.3415 14.5917 11.3332 12.1126 11.3332H11.3334V9.13734C11.3334 6.65817 10.3417 5.6665 7.86258 5.6665H5.66675V4.88734C5.66675 2.40817 6.65841 1.4165 9.13758 1.4165H12.1126C14.5917 1.4165 15.5834 2.40817 15.5834 4.88734Z"
                                                                        stroke="#1C0C13" stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </svg> Copy voice ID</p>
                                                            <p class="mb-0 foler"><svg
                                                                    xmlns="http://www.w3.org/2000/svg" width="17"
                                                                    height="17" viewBox="0 0 17 17" fill="none">
                                                                    <path
                                                                        d="M10.6179 12.3957H11.6875C13.8267 12.3957 15.5833 10.6461 15.5833 8.49984C15.5833 6.36067 13.8338 4.604 11.6875 4.604H10.6179"
                                                                        stroke="#1C0C13" stroke-width="1.0625"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                    <path
                                                                        d="M6.37508 4.604H5.31258C3.16633 4.604 1.41675 6.35359 1.41675 8.49984C1.41675 10.639 3.16633 12.3957 5.31258 12.3957H6.37508"
                                                                        stroke="#1C0C13" stroke-width="1.0625"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                    <path d="M5.66675 8.5H11.3334" stroke="#1C0C13"
                                                                        stroke-width="1.0625" stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </svg> Copy link</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="project-card">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="p-15">
                                                    <img src="assets/images/voice/voice.png" alt="">
                                                </div>

                                            </div>
                                            <div class="col-md-9">
                                                <div class="p-15">
                                                    <h3>Ivanna - Young & Casual</h3>
                                                    <p class="last">Formal</p>
                                                    <div class=" user-info">

                                                        <img src="assets/images/logo/user1.png" alt="">
                                                        <div class="text">

                                                            <p>Created by Lvanna<br><span class="last">uploaded 20 day’s
                                                                    ago</span></p>
                                                        </div>
                                                        <div class=" dropdown-toggle" data-bs-toggle="dropdown"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="20"
                                                                height="24" viewBox="0 0 20 24" fill="none">
                                                                <path
                                                                    d="M9.66645 19.6373C9.19901 19.6373 8.75071 19.4516 8.42018 19.1211C8.08965 18.7905 7.90395 18.3422 7.90395 17.8748C7.90395 17.4074 8.08965 16.9591 8.42018 16.6285C8.75071 16.298 9.19901 16.1123 9.66645 16.1123C10.1339 16.1123 10.5822 16.298 10.9127 16.6285C11.2433 16.9591 11.429 17.4074 11.429 17.8748C11.429 18.3422 11.2433 18.7905 10.9127 19.1211C10.5822 19.4516 10.1339 19.6373 9.66645 19.6373ZM9.66645 13.7623C9.435 13.7623 9.20581 13.7167 8.99197 13.6281C8.77814 13.5396 8.58384 13.4097 8.42018 13.2461C8.25652 13.0824 8.12669 12.8881 8.03812 12.6743C7.94954 12.4604 7.90395 12.2313 7.90395 11.9998C7.90395 11.7683 7.94954 11.5392 8.03812 11.3253C8.12669 11.1115 8.25652 10.9172 8.42018 10.7535C8.58384 10.5899 8.77814 10.46 8.99198 10.3715C9.20581 10.2829 9.435 10.2373 9.66645 10.2373C9.89791 10.2373 10.1271 10.2829 10.3409 10.3715C10.5548 10.46 10.7491 10.5899 10.9127 10.7535C11.0764 10.9172 11.2062 11.1115 11.2948 11.3253C11.3834 11.5392 11.429 11.7684 11.429 11.9998C11.429 12.2313 11.3834 12.4604 11.2948 12.6743C11.2062 12.8881 11.0764 13.0824 10.9127 13.2461C10.7491 13.4097 10.5548 13.5396 10.3409 13.6281C10.1271 13.7167 9.89791 13.7623 9.66645 13.7623ZM7.90395 6.1248C7.90395 5.65736 8.08965 5.20906 8.42018 4.87853C8.75071 4.548 9.19901 4.3623 9.66646 4.3623C10.1339 4.3623 10.5822 4.548 10.9127 4.87853C11.2433 5.20906 11.429 5.65736 11.429 6.1248C11.429 6.59225 11.2433 7.04055 10.9127 7.37108C10.5822 7.70161 10.1339 7.8873 9.66645 7.8873C9.19901 7.8873 8.75071 7.70161 8.42018 7.37108C8.08965 7.04055 7.90395 6.59225 7.90395 6.1248Z"
                                                                    fill="#ADA8A8" />
                                                            </svg> </div>

                                                        <!-- Dropdown Menu -->
                                                        <div class="dropdown-menu p-3 text-muted form-wrapper">
                                                            <p class="mb-2 foler"><svg
                                                                    xmlns="http://www.w3.org/2000/svg" width="17"
                                                                    height="17" viewBox="0 0 17 17" fill="none">
                                                                    <path
                                                                        d="M9.72547 2.48637L10.9721 4.9797C11.1421 5.32678 11.5955 5.6597 11.978 5.72345L14.2376 6.09887C15.6826 6.3397 16.0226 7.38803 14.9813 8.4222L13.2246 10.1789C12.9271 10.4764 12.7642 11.0501 12.8563 11.461L13.3592 13.6355C13.7559 15.3568 12.8421 16.0226 11.3192 15.123L9.20131 13.8693C8.81881 13.6426 8.18839 13.6426 7.79881 13.8693L5.68089 15.123C4.16506 16.0226 3.24422 15.3497 3.64089 13.6355L4.14381 11.461C4.23589 11.0501 4.07297 10.4764 3.77547 10.1789L2.01881 8.4222C0.984641 7.38803 1.31756 6.3397 2.76256 6.09887L5.02214 5.72345C5.39756 5.6597 5.85089 5.32678 6.02089 4.9797L7.26756 2.48637C7.94756 1.13345 9.05256 1.13345 9.72547 2.48637Z"
                                                                        stroke="#1C0C13" stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </svg> Add to Collection</p>
                                                            <p class="mb-2 foler"><svg
                                                                    xmlns="http://www.w3.org/2000/svg" width="17"
                                                                    height="17" viewBox="0 0 17 17" fill="none">
                                                                    <path
                                                                        d="M11.3334 9.13734V12.1123C11.3334 14.5915 10.3417 15.5832 7.86258 15.5832H4.88758C2.40841 15.5832 1.41675 14.5915 1.41675 12.1123V9.13734C1.41675 6.65817 2.40841 5.6665 4.88758 5.6665H7.86258C10.3417 5.6665 11.3334 6.65817 11.3334 9.13734Z"
                                                                        stroke="#1C0C13" stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                    <path
                                                                        d="M15.5834 4.88734V7.86234C15.5834 10.3415 14.5917 11.3332 12.1126 11.3332H11.3334V9.13734C11.3334 6.65817 10.3417 5.6665 7.86258 5.6665H5.66675V4.88734C5.66675 2.40817 6.65841 1.4165 9.13758 1.4165H12.1126C14.5917 1.4165 15.5834 2.40817 15.5834 4.88734Z"
                                                                        stroke="#1C0C13" stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </svg> Copy voice ID</p>
                                                            <p class="mb-0 foler"><svg
                                                                    xmlns="http://www.w3.org/2000/svg" width="17"
                                                                    height="17" viewBox="0 0 17 17" fill="none">
                                                                    <path
                                                                        d="M10.6179 12.3957H11.6875C13.8267 12.3957 15.5833 10.6461 15.5833 8.49984C15.5833 6.36067 13.8338 4.604 11.6875 4.604H10.6179"
                                                                        stroke="#1C0C13" stroke-width="1.0625"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                    <path
                                                                        d="M6.37508 4.604H5.31258C3.16633 4.604 1.41675 6.35359 1.41675 8.49984C1.41675 10.639 3.16633 12.3957 5.31258 12.3957H6.37508"
                                                                        stroke="#1C0C13" stroke-width="1.0625"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                    <path d="M5.66675 8.5H11.3334" stroke="#1C0C13"
                                                                        stroke-width="1.0625" stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </svg> Copy link</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="project-card">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="p-15">
                                                    <img src="assets/images/voice/voice.png" alt="">
                                                </div>

                                            </div>
                                            <div class="col-md-9">
                                                <div class="p-15">
                                                    <h3>Ivanna - Young & Casual</h3>
                                                    <p class="last">Formal</p>
                                                    <div class=" user-info">

                                                        <img src="assets/images/logo/user1.png" alt="">
                                                        <div class="text">

                                                            <p>Created by Lvanna<br><span class="last">uploaded 20 day’s
                                                                    ago</span></p>
                                                        </div>
                                                        <div class=" dropdown-toggle" data-bs-toggle="dropdown"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="20"
                                                                height="24" viewBox="0 0 20 24" fill="none">
                                                                <path
                                                                    d="M9.66645 19.6373C9.19901 19.6373 8.75071 19.4516 8.42018 19.1211C8.08965 18.7905 7.90395 18.3422 7.90395 17.8748C7.90395 17.4074 8.08965 16.9591 8.42018 16.6285C8.75071 16.298 9.19901 16.1123 9.66645 16.1123C10.1339 16.1123 10.5822 16.298 10.9127 16.6285C11.2433 16.9591 11.429 17.4074 11.429 17.8748C11.429 18.3422 11.2433 18.7905 10.9127 19.1211C10.5822 19.4516 10.1339 19.6373 9.66645 19.6373ZM9.66645 13.7623C9.435 13.7623 9.20581 13.7167 8.99197 13.6281C8.77814 13.5396 8.58384 13.4097 8.42018 13.2461C8.25652 13.0824 8.12669 12.8881 8.03812 12.6743C7.94954 12.4604 7.90395 12.2313 7.90395 11.9998C7.90395 11.7683 7.94954 11.5392 8.03812 11.3253C8.12669 11.1115 8.25652 10.9172 8.42018 10.7535C8.58384 10.5899 8.77814 10.46 8.99198 10.3715C9.20581 10.2829 9.435 10.2373 9.66645 10.2373C9.89791 10.2373 10.1271 10.2829 10.3409 10.3715C10.5548 10.46 10.7491 10.5899 10.9127 10.7535C11.0764 10.9172 11.2062 11.1115 11.2948 11.3253C11.3834 11.5392 11.429 11.7684 11.429 11.9998C11.429 12.2313 11.3834 12.4604 11.2948 12.6743C11.2062 12.8881 11.0764 13.0824 10.9127 13.2461C10.7491 13.4097 10.5548 13.5396 10.3409 13.6281C10.1271 13.7167 9.89791 13.7623 9.66645 13.7623ZM7.90395 6.1248C7.90395 5.65736 8.08965 5.20906 8.42018 4.87853C8.75071 4.548 9.19901 4.3623 9.66646 4.3623C10.1339 4.3623 10.5822 4.548 10.9127 4.87853C11.2433 5.20906 11.429 5.65736 11.429 6.1248C11.429 6.59225 11.2433 7.04055 10.9127 7.37108C10.5822 7.70161 10.1339 7.8873 9.66645 7.8873C9.19901 7.8873 8.75071 7.70161 8.42018 7.37108C8.08965 7.04055 7.90395 6.59225 7.90395 6.1248Z"
                                                                    fill="#ADA8A8" />
                                                            </svg> </div>

                                                        <!-- Dropdown Menu -->
                                                        <div class="dropdown-menu p-3 text-muted form-wrapper">
                                                            <p class="mb-2 foler"><svg
                                                                    xmlns="http://www.w3.org/2000/svg" width="17"
                                                                    height="17" viewBox="0 0 17 17" fill="none">
                                                                    <path
                                                                        d="M9.72547 2.48637L10.9721 4.9797C11.1421 5.32678 11.5955 5.6597 11.978 5.72345L14.2376 6.09887C15.6826 6.3397 16.0226 7.38803 14.9813 8.4222L13.2246 10.1789C12.9271 10.4764 12.7642 11.0501 12.8563 11.461L13.3592 13.6355C13.7559 15.3568 12.8421 16.0226 11.3192 15.123L9.20131 13.8693C8.81881 13.6426 8.18839 13.6426 7.79881 13.8693L5.68089 15.123C4.16506 16.0226 3.24422 15.3497 3.64089 13.6355L4.14381 11.461C4.23589 11.0501 4.07297 10.4764 3.77547 10.1789L2.01881 8.4222C0.984641 7.38803 1.31756 6.3397 2.76256 6.09887L5.02214 5.72345C5.39756 5.6597 5.85089 5.32678 6.02089 4.9797L7.26756 2.48637C7.94756 1.13345 9.05256 1.13345 9.72547 2.48637Z"
                                                                        stroke="#1C0C13" stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </svg> Add to Collection</p>
                                                            <p class="mb-2 foler"><svg
                                                                    xmlns="http://www.w3.org/2000/svg" width="17"
                                                                    height="17" viewBox="0 0 17 17" fill="none">
                                                                    <path
                                                                        d="M11.3334 9.13734V12.1123C11.3334 14.5915 10.3417 15.5832 7.86258 15.5832H4.88758C2.40841 15.5832 1.41675 14.5915 1.41675 12.1123V9.13734C1.41675 6.65817 2.40841 5.6665 4.88758 5.6665H7.86258C10.3417 5.6665 11.3334 6.65817 11.3334 9.13734Z"
                                                                        stroke="#1C0C13" stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                    <path
                                                                        d="M15.5834 4.88734V7.86234C15.5834 10.3415 14.5917 11.3332 12.1126 11.3332H11.3334V9.13734C11.3334 6.65817 10.3417 5.6665 7.86258 5.6665H5.66675V4.88734C5.66675 2.40817 6.65841 1.4165 9.13758 1.4165H12.1126C14.5917 1.4165 15.5834 2.40817 15.5834 4.88734Z"
                                                                        stroke="#1C0C13" stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </svg> Copy voice ID</p>
                                                            <p class="mb-0 foler"><svg
                                                                    xmlns="http://www.w3.org/2000/svg" width="17"
                                                                    height="17" viewBox="0 0 17 17" fill="none">
                                                                    <path
                                                                        d="M10.6179 12.3957H11.6875C13.8267 12.3957 15.5833 10.6461 15.5833 8.49984C15.5833 6.36067 13.8338 4.604 11.6875 4.604H10.6179"
                                                                        stroke="#1C0C13" stroke-width="1.0625"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                    <path
                                                                        d="M6.37508 4.604H5.31258C3.16633 4.604 1.41675 6.35359 1.41675 8.49984C1.41675 10.639 3.16633 12.3957 5.31258 12.3957H6.37508"
                                                                        stroke="#1C0C13" stroke-width="1.0625"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                    <path d="M5.66675 8.5H11.3334" stroke="#1C0C13"
                                                                        stroke-width="1.0625" stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </svg> Copy link</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>


                            </div>

                            <br>




                        </div>
                    </div>
                </div>
            </div>




        </div>
    </div>
    <!-- Container-fluid starts-->

</div>

<div class="modal fade" id="exampleModalv1" tabindex="-1" role="dialog" aria-labelledby="exampleModalv1"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content rounded-4 shadow-lg">

            <div class="modal-body p-4">
                <!-- Modal Header -->
                <div class="d-flex align-items-center mb-4">
                    <img src="assets/images/logo/sounD.png" alt="icon" width="40" height="40" class="me-2">
                    <h4 class="project">Instant Voice Clone</h4>
                </div>

                <!-- Option: Create New PPT -->
                <div class="p-3 mb-3 rounded-3 shadow-1 folder-box">
                    <div class="d-flex align-items-start">
                        <img src="assets/images/logo/comp.png" alt="ppt-icon" class="me-3">
                        <div>
                            <h6 class="mb-1 ppt" data-bs-toggle="modal" data-original-title="test"
                                data-bs-target="#exampleModalv7">Voice Design</h6>
                            <p class="text2">Design an entirely new voice from a text prompt.</p>
                            <span class="badge1 bg-light ">Less than 15 minute</span>
                        </div>
                    </div>
                </div>

                <!-- Option: Add New Folder -->
                <div class="p-3 mb-3 rounded-3 shadow-sm position-relative upgrade-alert" data-bs-toggle="modal"
                    data-bs-target="#exampleModalv2">
                    <div class="d-flex align-items-start">
                        <img src="assets/images/logo/folDer.png" alt="folder-icon" class="me-3">
                        <div>
                            <h6 class="mb-1 ppt">Instant Clone Voice</h6>
                            <p class="text2">Add new folder and structured for folders</p>
                            <span class="badge1 bg-light ">2 minute</span>
                        </div>
                    </div>
                </div>

                <!-- Warning & Subscribe -->
                <div class="d-flex align-items-center justify-content-between p-3  bgg">
                    <small class="neeD"><img src="assets/images/logo/lock.png" alt=""> You need to be on at least the
                        Starter plan to create new folder</small>
                    <a href="#" class="btn btn-sm btn-dark1">Subscribe</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModalv2" tabindex="-1" aria-labelledby="exampleModalv2" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded-4 shadow-lg">
            <div class="modal-body p-4">
                <!-- Header -->
                <div class="d-flex align-items-center mb-4">
                    <img src="assets/images/logo/sounD.png" alt="icon" width="40" height="40" class="me-2">
                    <h4 class="project">Instant Voice Clone</h4>
                </div>

                <!-- Subtext -->


                <!-- Search + Create -->
                <div class="row mb-3">
                    <div class="col-md-4">
                        <div class=" shadow-1 folder-box">


                            <div>
                                <h6 class="mb-1 ppt">Avoid noisy environments</h6>
                                <p class="text6">Background sounds interfere with recording quality results.</p>

                            </div>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class=" shadow-1 folder-box">


                            <div>
                                <h6 class="mb-1 ppt">Check microphone quality</h6>
                                <p class="text6">Try external units or headphone
                                    mics for better audio capture.</p>

                            </div>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class=" shadow-1 folder-box">


                            <div>
                                <h6 class="mb-1 ppt">Use consistent equipment</h6>
                                <p class="text6">Don't change recording
                                    equipment between samples.</p>

                            </div>

                        </div>
                    </div>

                </div>

                <div class="row mb-3">
                    <div class="col-md-12">
                        <form action="/upload" class="dropzone custom-dropzone dz-clickable" id="myDropzone">
                            <div class="dz-message">
                                <i><svg xmlns="http://www.w3.org/2000/svg" width="39" height="38" viewBox="0 0 39 38"
                                        fill="none">
                                        <path
                                            d="M26.1342 3.1665H12.8659C7.10258 3.1665 3.66675 6.60234 3.66675 12.3657V25.6182C3.66675 31.3973 7.10258 34.8332 12.8659 34.8332H26.1184C31.8817 34.8332 35.3176 31.3973 35.3176 25.634V12.3657C35.3334 6.60234 31.8976 3.1665 26.1342 3.1665ZM11.1876 22.3882C11.1876 23.0373 10.6492 23.5757 10.0001 23.5757C9.35091 23.5757 8.81258 23.0373 8.81258 22.3882V15.6115C8.81258 14.9623 9.35091 14.424 10.0001 14.424C10.6492 14.424 11.1876 14.9623 11.1876 15.6115V22.3882ZM15.9376 24.6523C15.9376 25.3015 15.3992 25.8398 14.7501 25.8398C14.1009 25.8398 13.5626 25.3015 13.5626 24.6523V13.3473C13.5626 12.6982 14.1009 12.1598 14.7501 12.1598C15.3992 12.1598 15.9376 12.6982 15.9376 13.3473V24.6523ZM20.6876 26.9165C20.6876 27.5657 20.1492 28.104 19.5001 28.104C18.8509 28.104 18.3126 27.5657 18.3126 26.9165V11.0832C18.3126 10.434 18.8509 9.89567 19.5001 9.89567C20.1492 9.89567 20.6876 10.434 20.6876 11.0832V26.9165ZM25.4376 24.6523C25.4376 25.3015 24.8992 25.8398 24.2501 25.8398C23.6009 25.8398 23.0626 25.3015 23.0626 24.6523V13.3473C23.0626 12.6982 23.6009 12.1598 24.2501 12.1598C24.8992 12.1598 25.4376 12.6982 25.4376 13.3473V24.6523ZM30.1876 22.3882C30.1876 23.0373 29.6492 23.5757 29.0001 23.5757C28.3509 23.5757 27.8126 23.0373 27.8126 22.3882V15.6115C27.8126 14.9623 28.3509 14.424 29.0001 14.424C29.6492 14.424 30.1876 14.9623 30.1876 15.6115V22.3882Z"
                                            fill="#1C0C13" />
                                    </svg></i>
                                <p class="foler">Click to upload, or drag and drop </p>
                                <p class="last">Audio or video files, up to IOMB each</p>
                                <p class="foler">or</p>

                            </div>
                        </form>
                    </div>


                    <br>
                    <br>

                </div>

                <div class="mlr">
                    <button class="import-btn mlr" data-bs-toggle="modal" data-original-title="test"
                        data-bs-target="#exampleModalv3"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                            viewBox="0 0 12 12" fill="none">
                            <path
                                d="M5.98535 8.73747C7.50243 8.73747 8.73535 7.50455 8.73535 5.98747V3.6958C8.73535 2.17872 7.50243 0.945801 5.98535 0.945801C4.46827 0.945801 3.23535 2.17872 3.23535 3.6958V5.98747C3.23535 7.50455 4.46827 8.73747 5.98535 8.73747Z"
                                stroke="#1C0C13" stroke-width="0.6875" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M1.86035 5.0708V5.98747C1.86035 8.26538 3.70744 10.1125 5.98535 10.1125C8.26327 10.1125 10.1104 8.26538 10.1104 5.98747V5.0708"
                                stroke="#1C0C13" stroke-width="0.6875" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M4.66089 3.45781C5.47672 3.1599 6.36589 3.1599 7.18172 3.45781" stroke="#1C0C13"
                                stroke-width="0.6875" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M5.08252 4.83268C5.63252 4.68143 6.2146 4.68143 6.7646 4.83268" stroke="#1C0C13"
                                stroke-width="0.6875" stroke-linecap="round" stroke-linejoin="round" />
                        </svg> Record Audio</button>
                </div>

                <br><br>
                <div class="row">
                    <div class="col-md-12">
                        <button class="create-btn w-100" data-bs-toggle="modal" data-original-title="test"
                            data-bs-target="#exampleModalv1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14"
                                fill="none">
                                <path d="M3.5 5.75195V8.25448" stroke="white" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M5.25 4.91748V9.08249" stroke="white" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M7 4.0835V9.91683" stroke="white" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M8.75 4.91748V9.08249" stroke="white" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M10.5 5.75195V8.25448" stroke="white" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M7.00008 12.8332C10.2217 12.8332 12.8334 10.2215 12.8334 6.99984C12.8334 3.77818 10.2217 1.1665 7.00008 1.1665C3.77842 1.1665 1.16675 3.77818 1.16675 6.99984C1.16675 10.2215 3.77842 12.8332 7.00008 12.8332Z"
                                    stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            Next
                        </button>
                    </div>
                </div>


                <!-- Folder List -->


            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModalv3" tabindex="-1" role="dialog" aria-labelledby="exampleModalv3"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content rounded-4 shadow-lg">
            <div class="modal-header">
                <div class="d-flex align-items-center ">
                    <img src="assets/images/logo/sounD.png" alt="icon" width="40" height="40" class="me-2">
                    <h4 class="project">Instant Voice Clone</h4>
                </div>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>


            <div class="modal-body p-4">
                <!-- Modal Header -->

                <!-- Option: Create New PPT -->
                <div class="p-3  rounded-3 shadow-1 folder-box">
                    <h4 class="ppt mb-3">Record your Voice</h4>

                    <img class="w-100" src="assets/images/voice/v1.png" alt="ppt-icon" class="me-3">
                    <br>
                    <br>

                    <img class="mlr" src="assets/images/voice/mic.png" alt="ppt-icon" class="me-3">


                </div>

                <!-- Option: Add New Folder -->

            </div>
            <div class="modal-footer">
                <button class=" import-btn" type="button" data-bs-dismiss="modal">Back</button>
                <button class=" create-btn" type="button" data-bs-toggle="modal" data-original-title="test"
                    data-bs-target="#exampleModalv4"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                        viewBox="0 0 14 14" fill="none">
                        <path d="M3.5 5.75195V8.25448" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M5.25 4.91748V9.08249" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M7 4.0835V9.91683" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M8.75 4.91748V9.08249" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M10.5 5.75195V8.25448" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M7.00008 12.8332C10.2217 12.8332 12.8334 10.2215 12.8334 6.99984C12.8334 3.77818 10.2217 1.1665 7.00008 1.1665C3.77842 1.1665 1.16675 3.77818 1.16675 6.99984C1.16675 10.2215 3.77842 12.8332 7.00008 12.8332Z"
                            stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                    </svg> Save Voice</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModalv4" tabindex="-1" role="dialog" aria-labelledby="exampleModalv4"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content rounded-4 shadow-lg">
            <div class="modal-header">
                <div class="d-flex align-items-center ">
                    <img src="assets/images/logo/sounD.png" alt="icon" width="40" height="40" class="me-2">
                    <h4 class="project">Instant Voice Clone</h4>
                </div>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>


            <div class="modal-body p-4">
                <!-- Modal Header -->

                <!-- Option: Create New PPT -->
                <div class="p-3  rounded-3 shadow-1 folder-box">
                    <h4 class="ppt mb-3">Record your Voice</h4>

                    <img class="w-100" src="assets/images/voice/v1.png" alt="ppt-icon" class="me-3">
                    <br>
                    <br>

                    <img class="mlr" src="assets/images/voice/mic.png" alt="ppt-icon" class="me-3">


                </div>

                <div class="box1">
                    <div class="left">
                        <div class="title"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="26"
                                viewBox="0 0 20 26" fill="none">
                                <path d="M4 9.85986V14.1499V9.85986Z" fill="url(#paint0_linear_38_2758)" />
                                <path d="M4 9.85986V14.1499" stroke="url(#paint1_linear_38_2758)" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M7 8.43018V15.5702V8.43018Z" fill="url(#paint2_linear_38_2758)" />
                                <path d="M7 8.43018V15.5702" stroke="url(#paint3_linear_38_2758)" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M10 7V17V7Z" fill="url(#paint4_linear_38_2758)" />
                                <path d="M10 7V17" stroke="url(#paint5_linear_38_2758)" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M13 8.43018V15.5702V8.43018Z" fill="url(#paint6_linear_38_2758)" />
                                <path d="M13 8.43018V15.5702" stroke="url(#paint7_linear_38_2758)" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M16 9.85986V14.1499V9.85986Z" fill="url(#paint8_linear_38_2758)" />
                                <path d="M16 9.85986V14.1499" stroke="url(#paint9_linear_38_2758)" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <defs>
                                    <linearGradient id="paint0_linear_38_2758" x1="3.79342" y1="9.33986" x2="5.25318"
                                        y2="9.35012" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#A93178" />
                                        <stop offset="1" stop-color="#F99D44" />
                                    </linearGradient>
                                    <linearGradient id="paint1_linear_38_2758" x1="3.79342" y1="9.33986" x2="5.25318"
                                        y2="9.35012" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#A93178" />
                                        <stop offset="1" stop-color="#F99D44" />
                                    </linearGradient>
                                    <linearGradient id="paint2_linear_38_2758" x1="6.79342" y1="7.56472" x2="8.25322"
                                        y2="7.57089" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#A93178" />
                                        <stop offset="1" stop-color="#F99D44" />
                                    </linearGradient>
                                    <linearGradient id="paint3_linear_38_2758" x1="6.79342" y1="7.56472" x2="8.25322"
                                        y2="7.57089" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#A93178" />
                                        <stop offset="1" stop-color="#F99D44" />
                                    </linearGradient>
                                    <linearGradient id="paint4_linear_38_2758" x1="9.79342" y1="5.78788" x2="11.2532"
                                        y2="5.79228" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#A93178" />
                                        <stop offset="1" stop-color="#F99D44" />
                                    </linearGradient>
                                    <linearGradient id="paint5_linear_38_2758" x1="9.79342" y1="5.78788" x2="11.2532"
                                        y2="5.79228" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#A93178" />
                                        <stop offset="1" stop-color="#F99D44" />
                                    </linearGradient>
                                    <linearGradient id="paint6_linear_38_2758" x1="12.7934" y1="7.56472" x2="14.2532"
                                        y2="7.57089" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#A93178" />
                                        <stop offset="1" stop-color="#F99D44" />
                                    </linearGradient>
                                    <linearGradient id="paint7_linear_38_2758" x1="12.7934" y1="7.56472" x2="14.2532"
                                        y2="7.57089" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#A93178" />
                                        <stop offset="1" stop-color="#F99D44" />
                                    </linearGradient>
                                    <linearGradient id="paint8_linear_38_2758" x1="15.7934" y1="9.33986" x2="17.2532"
                                        y2="9.35012" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#A93178" />
                                        <stop offset="1" stop-color="#F99D44" />
                                    </linearGradient>
                                    <linearGradient id="paint9_linear_38_2758" x1="15.7934" y1="9.33986" x2="17.2532"
                                        y2="9.35012" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#A93178" />
                                        <stop offset="1" stop-color="#F99D44" />
                                    </linearGradient>
                                </defs>
                            </svg> Your Recording</div>
                        <div class="time">12 Feb 2025, 10:23PM</div>
                    </div>
                    <div class="trash" title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="23" height="23"
                            viewBox="0 0 23 23" fill="none">
                            <path
                                d="M20.125 5.73063C16.9337 5.41438 13.7233 5.25146 10.5225 5.25146C8.625 5.25146 6.7275 5.3473 4.83 5.53897L2.875 5.73063"
                                stroke="#F03E22" stroke-width="1.4375" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M8.14575 4.76275L8.35659 3.50734C8.50992 2.59692 8.62492 1.9165 10.2445 1.9165H12.7553C14.3749 1.9165 14.4995 2.63525 14.6433 3.51692L14.8541 4.76275"
                                stroke="#F03E22" stroke-width="1.4375" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M18.0645 8.75928L17.4416 18.4097C17.3361 19.9143 17.2499 21.0834 14.5761 21.0834H8.42364C5.74989 21.0834 5.66364 19.9143 5.55822 18.4097L4.9353 8.75928"
                                stroke="#F03E22" stroke-width="1.4375" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M9.89966 15.8125H13.0909" stroke="#F03E22" stroke-width="1.4375"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M9.10425 11.979H13.8959" stroke="#F03E22" stroke-width="1.4375"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg></div>
                </div>

                <!-- Option: Add New Folder -->

            </div>
            <div class="modal-footer">
                <button class=" import-btn" type="button" data-bs-dismiss="modal">Back</button>
                <button class=" create-btn" type="button" data-bs-toggle="modal" data-original-title="test"
                    data-bs-target="#exampleModalv5"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                        viewBox="0 0 14 14" fill="none">
                        <path d="M3.5 5.75195V8.25448" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M5.25 4.91748V9.08249" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M7 4.0835V9.91683" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M8.75 4.91748V9.08249" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M10.5 5.75195V8.25448" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M7.00008 12.8332C10.2217 12.8332 12.8334 10.2215 12.8334 6.99984C12.8334 3.77818 10.2217 1.1665 7.00008 1.1665C3.77842 1.1665 1.16675 3.77818 1.16675 6.99984C1.16675 10.2215 3.77842 12.8332 7.00008 12.8332Z"
                            stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                    </svg> Save Voice</button>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="exampleModalv5" tabindex="-1" aria-labelledby="exampleModalv5" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded-4 shadow-lg">
            <div class="modal-body p-4">
                <!-- Header -->
                <div class="d-flex align-items-center mb-4">
                    <img src="assets/images/logo/sounD.png" alt="icon" width="40" height="40" class="me-2">
                    <h4 class="project">Instant Voice Clone</h4>
                </div>

                <!-- Subtext -->


                <!-- Search + Create -->
                <div class="row mb-3">
                    <div class="col-md-4">
                        <div class=" shadow-1 folder-box">


                            <div>
                                <h6 class="mb-1 ppt">Avoid noisy environments</h6>
                                <p class="text6">Background sounds interfere with recording quality results.</p>

                            </div>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class=" shadow-1 folder-box">


                            <div>
                                <h6 class="mb-1 ppt">Check microphone quality</h6>
                                <p class="text6">Try external units or headphone
                                    mics for better audio capture.</p>

                            </div>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class=" shadow-1 folder-box">


                            <div>
                                <h6 class="mb-1 ppt">Use consistent equipment</h6>
                                <p class="text6">Don't change recording
                                    equipment between samples.</p>

                            </div>

                        </div>
                    </div>

                </div>

                <div class="row mb-3">
                    <div class="col-md-12">
                        <form action="/upload" class="dropzone custom-dropzone dz-clickable" id="myDropzone">
                            <div class="dz-message">
                                <i><svg xmlns="http://www.w3.org/2000/svg" width="39" height="38" viewBox="0 0 39 38"
                                        fill="none">
                                        <path
                                            d="M26.1342 3.1665H12.8659C7.10258 3.1665 3.66675 6.60234 3.66675 12.3657V25.6182C3.66675 31.3973 7.10258 34.8332 12.8659 34.8332H26.1184C31.8817 34.8332 35.3176 31.3973 35.3176 25.634V12.3657C35.3334 6.60234 31.8976 3.1665 26.1342 3.1665ZM11.1876 22.3882C11.1876 23.0373 10.6492 23.5757 10.0001 23.5757C9.35091 23.5757 8.81258 23.0373 8.81258 22.3882V15.6115C8.81258 14.9623 9.35091 14.424 10.0001 14.424C10.6492 14.424 11.1876 14.9623 11.1876 15.6115V22.3882ZM15.9376 24.6523C15.9376 25.3015 15.3992 25.8398 14.7501 25.8398C14.1009 25.8398 13.5626 25.3015 13.5626 24.6523V13.3473C13.5626 12.6982 14.1009 12.1598 14.7501 12.1598C15.3992 12.1598 15.9376 12.6982 15.9376 13.3473V24.6523ZM20.6876 26.9165C20.6876 27.5657 20.1492 28.104 19.5001 28.104C18.8509 28.104 18.3126 27.5657 18.3126 26.9165V11.0832C18.3126 10.434 18.8509 9.89567 19.5001 9.89567C20.1492 9.89567 20.6876 10.434 20.6876 11.0832V26.9165ZM25.4376 24.6523C25.4376 25.3015 24.8992 25.8398 24.2501 25.8398C23.6009 25.8398 23.0626 25.3015 23.0626 24.6523V13.3473C23.0626 12.6982 23.6009 12.1598 24.2501 12.1598C24.8992 12.1598 25.4376 12.6982 25.4376 13.3473V24.6523ZM30.1876 22.3882C30.1876 23.0373 29.6492 23.5757 29.0001 23.5757C28.3509 23.5757 27.8126 23.0373 27.8126 22.3882V15.6115C27.8126 14.9623 28.3509 14.424 29.0001 14.424C29.6492 14.424 30.1876 14.9623 30.1876 15.6115V22.3882Z"
                                            fill="#1C0C13" />
                                    </svg></i>
                                <p class="foler">Click to upload, or drag and drop </p>
                                <p class="last">Audio or video files, up to IOMB each</p>
                                <p class="foler">or</p>

                            </div>
                        </form>
                    </div>


                    <br>
                    <br>

                </div>
                <div class="">
                    <div class="box1">
                        <div class="left">
                            <div class="title"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="26"
                                    viewBox="0 0 20 26" fill="none">
                                    <path d="M4 9.85986V14.1499V9.85986Z" fill="url(#paint0_linear_38_2758)"></path>
                                    <path d="M4 9.85986V14.1499" stroke="url(#paint1_linear_38_2758)" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M7 8.43018V15.5702V8.43018Z" fill="url(#paint2_linear_38_2758)"></path>
                                    <path d="M7 8.43018V15.5702" stroke="url(#paint3_linear_38_2758)" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M10 7V17V7Z" fill="url(#paint4_linear_38_2758)"></path>
                                    <path d="M10 7V17" stroke="url(#paint5_linear_38_2758)" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M13 8.43018V15.5702V8.43018Z" fill="url(#paint6_linear_38_2758)"></path>
                                    <path d="M13 8.43018V15.5702" stroke="url(#paint7_linear_38_2758)"
                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M16 9.85986V14.1499V9.85986Z" fill="url(#paint8_linear_38_2758)"></path>
                                    <path d="M16 9.85986V14.1499" stroke="url(#paint9_linear_38_2758)"
                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <defs>
                                        <linearGradient id="paint0_linear_38_2758" x1="3.79342" y1="9.33986"
                                            x2="5.25318" y2="9.35012" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#A93178"></stop>
                                            <stop offset="1" stop-color="#F99D44"></stop>
                                        </linearGradient>
                                        <linearGradient id="paint1_linear_38_2758" x1="3.79342" y1="9.33986"
                                            x2="5.25318" y2="9.35012" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#A93178"></stop>
                                            <stop offset="1" stop-color="#F99D44"></stop>
                                        </linearGradient>
                                        <linearGradient id="paint2_linear_38_2758" x1="6.79342" y1="7.56472"
                                            x2="8.25322" y2="7.57089" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#A93178"></stop>
                                            <stop offset="1" stop-color="#F99D44"></stop>
                                        </linearGradient>
                                        <linearGradient id="paint3_linear_38_2758" x1="6.79342" y1="7.56472"
                                            x2="8.25322" y2="7.57089" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#A93178"></stop>
                                            <stop offset="1" stop-color="#F99D44"></stop>
                                        </linearGradient>
                                        <linearGradient id="paint4_linear_38_2758" x1="9.79342" y1="5.78788"
                                            x2="11.2532" y2="5.79228" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#A93178"></stop>
                                            <stop offset="1" stop-color="#F99D44"></stop>
                                        </linearGradient>
                                        <linearGradient id="paint5_linear_38_2758" x1="9.79342" y1="5.78788"
                                            x2="11.2532" y2="5.79228" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#A93178"></stop>
                                            <stop offset="1" stop-color="#F99D44"></stop>
                                        </linearGradient>
                                        <linearGradient id="paint6_linear_38_2758" x1="12.7934" y1="7.56472"
                                            x2="14.2532" y2="7.57089" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#A93178"></stop>
                                            <stop offset="1" stop-color="#F99D44"></stop>
                                        </linearGradient>
                                        <linearGradient id="paint7_linear_38_2758" x1="12.7934" y1="7.56472"
                                            x2="14.2532" y2="7.57089" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#A93178"></stop>
                                            <stop offset="1" stop-color="#F99D44"></stop>
                                        </linearGradient>
                                        <linearGradient id="paint8_linear_38_2758" x1="15.7934" y1="9.33986"
                                            x2="17.2532" y2="9.35012" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#A93178"></stop>
                                            <stop offset="1" stop-color="#F99D44"></stop>
                                        </linearGradient>
                                        <linearGradient id="paint9_linear_38_2758" x1="15.7934" y1="9.33986"
                                            x2="17.2532" y2="9.35012" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#A93178"></stop>
                                            <stop offset="1" stop-color="#F99D44"></stop>
                                        </linearGradient>
                                    </defs>
                                </svg> Your Recording</div>
                            <div class="time">12 Feb 2025, 10:23PM</div>
                        </div>
                        <div class="trash" title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="23" height="23"
                                viewBox="0 0 23 23" fill="none">
                                <path
                                    d="M20.125 5.73063C16.9337 5.41438 13.7233 5.25146 10.5225 5.25146C8.625 5.25146 6.7275 5.3473 4.83 5.53897L2.875 5.73063"
                                    stroke="#F03E22" stroke-width="1.4375" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                                <path
                                    d="M8.14575 4.76275L8.35659 3.50734C8.50992 2.59692 8.62492 1.9165 10.2445 1.9165H12.7553C14.3749 1.9165 14.4995 2.63525 14.6433 3.51692L14.8541 4.76275"
                                    stroke="#F03E22" stroke-width="1.4375" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                                <path
                                    d="M18.0645 8.75928L17.4416 18.4097C17.3361 19.9143 17.2499 21.0834 14.5761 21.0834H8.42364C5.74989 21.0834 5.66364 19.9143 5.55822 18.4097L4.9353 8.75928"
                                    stroke="#F03E22" stroke-width="1.4375" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                                <path d="M9.89966 15.8125H13.0909" stroke="#F03E22" stroke-width="1.4375"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M9.10425 11.979H13.8959" stroke="#F03E22" stroke-width="1.4375"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg></div>
                    </div>
                </div>

                <br><br>
                <div class="row">
                    <div class="col-md-12">
                        <button class="create-btn w-100" data-bs-toggle="modal" data-original-title="test"
                            data-bs-target="#exampleModalv6">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14"
                                fill="none">
                                <path d="M3.5 5.75195V8.25448" stroke="white" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M5.25 4.91748V9.08249" stroke="white" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M7 4.0835V9.91683" stroke="white" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M8.75 4.91748V9.08249" stroke="white" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M10.5 5.75195V8.25448" stroke="white" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M7.00008 12.8332C10.2217 12.8332 12.8334 10.2215 12.8334 6.99984C12.8334 3.77818 10.2217 1.1665 7.00008 1.1665C3.77842 1.1665 1.16675 3.77818 1.16675 6.99984C1.16675 10.2215 3.77842 12.8332 7.00008 12.8332Z"
                                    stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            Next
                        </button>
                    </div>
                </div>


                <!-- Folder List -->


            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="exampleModalv6" tabindex="-1" aria-labelledby="exampleModalv6" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded-4 shadow-lg">
            <div class="modal-body p-4">
                <!-- Header -->
                <div class="d-flex align-items-center mb-4">
                    <img src="assets/images/logo/sounD.png" alt="icon" width="40" height="40" class="me-2">
                    <h4 class="project">Voice Design</h4>
                </div>

                <!-- Subtext -->


                <!-- Search + Create -->
                <div class="row mb-3">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="col-form-label">Name</label>
                            <input class="form-control" type="text" required="" placeholder="e.g. old British man">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="col-form-label">Label</label>
                            <input class="form-control" type="email" required="" placeholder="Language">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div>
                            <label class="col-form-label">Description</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="An old British male with a raspy, deep voice. Professional,
relaxed and assertive"></textarea>
                        </div>
                    </div>
                </div>




                <!-- Folder List -->


            </div>

            <div class="modal-footer">
                <button class=" import-btn" type="button">Back</button>
                <button class=" create-btn" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                        viewBox="0 0 14 14" fill="none">
                        <path d="M3.5 5.75195V8.25448" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M5.25 4.91748V9.08249" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M7 4.0835V9.91683" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M8.75 4.91748V9.08249" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M10.5 5.75195V8.25448" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M7.00008 12.8332C10.2217 12.8332 12.8334 10.2215 12.8334 6.99984C12.8334 3.77818 10.2217 1.1665 7.00008 1.1665C3.77842 1.1665 1.16675 3.77818 1.16675 6.99984C1.16675 10.2215 3.77842 12.8332 7.00008 12.8332Z"
                            stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                    </svg> Save Voice</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModalv7" tabindex="-1" aria-labelledby="exampleModalv7" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded-4 shadow-lg">
            <div class="modal-header">
                <div class="d-flex align-items-center ">
                    <img src="assets/images/logo/sounD.png" alt="icon" width="40" height="40" class="me-2">
                    <h4 class="project">Voice Design</h4>
                </div>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <!-- Header -->


                <!-- Subtext -->


                <!-- Search + Create -->
                <div class="row mb-3">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="col-form-label">Prompt</label>
                            <input class="form-control" type="text" required=""
                                placeholder="A massive evil ogre, troll">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div>
                            <label class="col-form-label">Text to preview</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"
                                placeholder="Your weapons are but toothpicks to me. Surrender now and I may grant you a swift end. I've toppled kingdoms and devoured armies. What hope do you have against me?"></textarea>
                        </div>
                    </div>
                </div>




                <!-- Folder List -->
                <div class="row">
                    <div class="col-md-12">
                        <button class="create-btn w-100" data-bs-toggle="modal" data-original-title="test"
                            data-bs-target="#exampleModalv8">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14"
                                fill="none">
                                <path d="M3.5 5.75195V8.25448" stroke="white" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                                <path d="M5.25 4.91748V9.08249" stroke="white" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                                <path d="M7 4.0835V9.91683" stroke="white" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                                <path d="M8.75 4.91748V9.08249" stroke="white" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                                <path d="M10.5 5.75195V8.25448" stroke="white" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                                <path
                                    d="M7.00008 12.8332C10.2217 12.8332 12.8334 10.2215 12.8334 6.99984C12.8334 3.77818 10.2217 1.1665 7.00008 1.1665C3.77842 1.1665 1.16675 3.77818 1.16675 6.99984C1.16675 10.2215 3.77842 12.8332 7.00008 12.8332Z"
                                    stroke="white" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            Next
                        </button>
                    </div>
                </div>

            </div>


        </div>
    </div>
</div>


<div class="modal fade" id="exampleModalv8" tabindex="-1" aria-labelledby="exampleModalv8" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded-4 shadow-lg">
            <div class="modal-header">
                <div class="d-flex align-items-center ">
                    <img src="assets/images/logo/sounD.png" alt="icon" width="40" height="40" class="me-2">
                    <h4 class="project">Voice Design</h4>
                </div>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <!-- Header -->


                <!-- Subtext -->


                <!-- Search + Create -->
                <div class="row mb-3">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="col-form-label">Prompt</label>
                            <input class="form-control" type="text" required=""
                                placeholder="A massive evil ogre, troll">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div>
                            <label class="col-form-label">Text to preview</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"
                                placeholder="Your weapons are but toothpicks to me. Surrender now and I may grant you a swift end. I've toppled kingdoms and devoured armies. What hope do you have against me?"></textarea>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <button class="create-btn w-100">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14"
                                fill="none">
                                <path d="M3.5 5.75195V8.25448" stroke="white" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                                <path d="M5.25 4.91748V9.08249" stroke="white" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                                <path d="M7 4.0835V9.91683" stroke="white" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                                <path d="M8.75 4.91748V9.08249" stroke="white" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                                <path d="M10.5 5.75195V8.25448" stroke="white" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                                <path
                                    d="M7.00008 12.8332C10.2217 12.8332 12.8334 10.2215 12.8334 6.99984C12.8334 3.77818 10.2217 1.1665 7.00008 1.1665C3.77842 1.1665 1.16675 3.77818 1.16675 6.99984C1.16675 10.2215 3.77842 12.8332 7.00008 12.8332Z"
                                    stroke="white" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            Generate Voice
                        </button>
                    </div>
                </div>
                <br>
                <br>

                <div class="voice-container">
                    <div class="import-btn active" onclick="selectVoice(this)">
                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                            <path
                                d="M14.9304 8.19505L4.7804 14.3158C4.18284 14.6743 3.41455 14.2475 3.41455 13.5475V6.71822C3.41455 3.73895 6.63284 1.87797 9.21943 3.36334L13.1377 5.617L14.9219 6.64139C15.5109 6.99139 15.5194 7.84505 14.9304 8.19505Z"
                                fill="#1C0C13" />
                            <path
                                d="M15.4427 13.1978L11.9854 15.1954L8.53658 17.1844C7.29878 17.893 5.89878 17.7478 4.88293 17.0308C4.3878 16.6893 4.44756 15.9295 4.96829 15.6222L15.8183 9.11734C16.3305 8.81003 17.0049 9.10027 17.0988 9.6893C17.3122 11.0125 16.7659 12.4381 15.4427 13.1978Z"
                                fill="#1C0C13" />
                        </svg>
                        <span>Voice 1</span>
                    </div>
                    <div class="import-btn" onclick="selectVoice(this)">
                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                            <path
                                d="M14.9304 8.19505L4.7804 14.3158C4.18284 14.6743 3.41455 14.2475 3.41455 13.5475V6.71822C3.41455 3.73895 6.63284 1.87797 9.21943 3.36334L13.1377 5.617L14.9219 6.64139C15.5109 6.99139 15.5194 7.84505 14.9304 8.19505Z"
                                fill="#1C0C13" />
                            <path
                                d="M15.4427 13.1978L11.9854 15.1954L8.53658 17.1844C7.29878 17.893 5.89878 17.7478 4.88293 17.0308C4.3878 16.6893 4.44756 15.9295 4.96829 15.6222L15.8183 9.11734C16.3305 8.81003 17.0049 9.10027 17.0988 9.6893C17.3122 11.0125 16.7659 12.4381 15.4427 13.1978Z"
                                fill="#1C0C13" />
                        </svg>
                        <span>Voice 2</span>
                    </div>
                    <div class="import-btn" onclick="selectVoice(this)">
                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                            <path
                                d="M14.9304 8.19505L4.7804 14.3158C4.18284 14.6743 3.41455 14.2475 3.41455 13.5475V6.71822C3.41455 3.73895 6.63284 1.87797 9.21943 3.36334L13.1377 5.617L14.9219 6.64139C15.5109 6.99139 15.5194 7.84505 14.9304 8.19505Z"
                                fill="#1C0C13" />
                            <path
                                d="M15.4427 13.1978L11.9854 15.1954L8.53658 17.1844C7.29878 17.893 5.89878 17.7478 4.88293 17.0308C4.3878 16.6893 4.44756 15.9295 4.96829 15.6222L15.8183 9.11734C16.3305 8.81003 17.0049 9.10027 17.0988 9.6893C17.3122 11.0125 16.7659 12.4381 15.4427 13.1978Z"
                                fill="#1C0C13" />
                        </svg>
                        <span>Voice 3</span>
                    </div>
                </div>
                <!-- Folder List -->


            </div>

            <div class="modal-footer">
                <button class=" import-btn" type="button" data-bs-dismiss="modal">Copy share link</button>
                <button class=" create-btn w-100" type="button" data-bs-toggle="modal" data-original-title="test"
                    data-bs-target="#exampleModalv6"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                        viewBox="0 0 14 14" fill="none">
                        <path d="M3.5 5.75195V8.25448" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M5.25 4.91748V9.08249" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M7 4.0835V9.91683" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M8.75 4.91748V9.08249" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M10.5 5.75195V8.25448" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M7.00008 12.8332C10.2217 12.8332 12.8334 10.2215 12.8334 6.99984C12.8334 3.77818 10.2217 1.1665 7.00008 1.1665C3.77842 1.1665 1.16675 3.77818 1.16675 6.99984C1.16675 10.2215 3.77842 12.8332 7.00008 12.8332Z"
                            stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                    </svg> Select Voice</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModalv9" tabindex="-1" aria-labelledby="exampleModalv9" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded-4 shadow-lg">
            <div class="modal-body p-4">
                <!-- Header -->
                <div class="d-flex align-items-center mb-4">
                    <img src="assets/images/logo/sounD.png" alt="icon" width="40" height="40" class="me-2">
                    <h4 class="project">Voice Design</h4>
                </div>

                <!-- Subtext -->


                <!-- Search + Create -->
                <div class="row mb-3">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="col-form-label">Name</label>
                            <input class="form-control" type="text" required="" placeholder="e.g. old British man">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="col-form-label">Label</label>
                            <input class="form-control" type="email" required="" placeholder="Language">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div>
                            <label class="col-form-label">Description</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="An old British male with a raspy, deep voice. Professional,
relaxed and assertive"></textarea>
                        </div>
                    </div>
                </div>




                <!-- Folder List -->


            </div>

            <div class="modal-footer">
                <button class=" import-btn" type="button">Back</button>
                <button class=" create-btn" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                        viewBox="0 0 14 14" fill="none">
                        <path d="M3.5 5.75195V8.25448" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M5.25 4.91748V9.08249" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M7 4.0835V9.91683" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M8.75 4.91748V9.08249" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M10.5 5.75195V8.25448" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M7.00008 12.8332C10.2217 12.8332 12.8334 10.2215 12.8334 6.99984C12.8334 3.77818 10.2217 1.1665 7.00008 1.1665C3.77842 1.1665 1.16675 3.77818 1.16675 6.99984C1.16675 10.2215 3.77842 12.8332 7.00008 12.8332Z"
                            stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                    </svg> Save Voice</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModalv10" tabindex="-1" aria-labelledby="exampleModalv10" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded-4 shadow-lg">
            <div class="modal-body p-4">
                <!-- Header -->
                <div class="d-flex align-items-center mb-4">
                    <img src="assets/images/logo/sounD.png" alt="icon" width="40" height="40" class="me-2">
                    <h4 class="project">Voice Design</h4>
                </div>

                <!-- Subtext -->


                <!-- Search + Create -->
                <div class="row mb-3">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="col-form-label">Title</label>
                            <input class="form-control" type="text" required="" placeholder="e.g. old British man">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="col-form-label">Make it</label>
                            <input class="form-control" type="text" required="" placeholder="Select your Privacy">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div>
                            <label class="col-form-label">Description</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="An old British male with a raspy, deep voice. Professional,
relaxed and assertive"></textarea>
                        </div>
                    </div>
                </div>




                <!-- Folder List -->


            </div>

            <div class="modal-footer">
                <button class=" import-btn" type="button">Discard</button>
                <button class=" create-btn" type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                        <path
                            d="M8.00936 2.04754L9.03602 4.10087C9.17602 4.38671 9.54936 4.66087 9.86436 4.71337L11.7252 5.02254C12.9152 5.22087 13.1952 6.08421 12.3377 6.93587L10.891 8.38254C10.646 8.62754 10.5119 9.10004 10.5877 9.43837L11.0019 11.2292C11.3285 12.6467 10.576 13.195 9.32186 12.4542L7.57769 11.4217C7.26269 11.235 6.74352 11.235 6.42269 11.4217L4.67852 12.4542C3.43019 13.195 2.67186 12.6409 2.99852 11.2292L3.41269 9.43837C3.48852 9.10004 3.35436 8.62754 3.10936 8.38254L1.66269 6.93587C0.811024 6.08421 1.08519 5.22087 2.27519 5.02254L4.13602 4.71337C4.44519 4.66087 4.81852 4.38671 4.95852 4.10087L5.98519 2.04754C6.54519 0.933372 7.45519 0.933372 8.00936 2.04754Z"
                            stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg> Add Collection</button>
            </div>
        </div>
    </div>
</div>

<script>
    function selectVoice(selectedBtn) {
        const buttons = document.querySelectorAll('.import-btn');
        buttons.forEach(btn => btn.classList.remove('active'));
        selectedBtn.classList.add('active');
    }
</script>

<?php include 'partials/footer.php'; ?>