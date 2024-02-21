<footer class="w-100 d-flex flex-row gap-2 justify-content-evenly align-items-center bg-150 shadow-sm rounded-3 p-2">
    <div class="dropup dropup-center btn btn-light shadow-sm p-0 rounded-3">
        <button class="dropdown-toggle px-3 py-1" style="background-color: transparent; border: none;" type="button" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expended="false">
            Horaires
        </button>
        <ul class="dropdown-menu list-unstyled mb-0" style="cursor: text; user-select: text;">
            <li class="dropdown-item-text text-nowrap d-flex flex-row justify-content-between gap-5"><div><?= $scheduleList[0]->day ?></div><div><?= $scheduleList[0]->schedule ?></div></li>
            <li class="dropdown-item-text text-nowrap d-flex flex-row justify-content-between gap-5"><div><?= $scheduleList[1]->day ?></div><div><?= $scheduleList[1]->schedule ?></div></li>
            <li class="dropdown-item-text text-nowrap d-flex flex-row justify-content-between gap-5"><div><?= $scheduleList[2]->day ?></div><div><?= $scheduleList[2]->schedule ?></div></li>
            <li class="dropdown-item-text text-nowrap d-flex flex-row justify-content-between gap-5"><div><?= $scheduleList[3]->day ?></div><div><?= $scheduleList[3]->schedule ?></div></li>
            <li class="dropdown-item-text text-nowrap d-flex flex-row justify-content-between gap-5"><div><?= $scheduleList[4]->day ?></div><div><?= $scheduleList[4]->schedule ?></div></li>
            <li class="dropdown-item-text text-nowrap d-flex flex-row justify-content-between gap-5"><div><?= $scheduleList[5]->day ?></div><div><?= $scheduleList[5]->schedule ?></div></li>
            <li class="dropdown-item-text text-nowrap d-flex flex-row justify-content-between gap-5"><div><?= $scheduleList[6]->day ?></div><div><?= $scheduleList[6]->schedule ?></div></li>
        </ul>
    </div>

    <div class="">© 2024 Garage Vincent Parrot</div>

    <div class="dropup dropup-center btn btn-light shadow-sm p-0 rounded-3">
        <button class="dropdown-toggle px-3 py-1" style="background-color: transparent; border: none;" type="button" data-bs-toggle="dropdown" data-bs-auto-close="false" aria-expended="false">
            Coordonnées
        </button>
        <ul class="dropdown-menu list-unstyled mb-0">
            <li class="dropdown-item-text fw-semibold">Garage Vincent Parrot</li>
            <li class="dropdown-item d-flex flex-row gap-3 justify-content-start align-item-center">
                <i class="bi bi-box-arrow-up-right"></i>
                <a class="link-dark link-underline-opacity-0" target="_blank" href="https://maps.app.goo.gl/ugdbR4F9BV51pYGx5">123 Rue de la République<br>31300 Toulouse</a>
            </li>
            <li class="dropdown-item d-flex flex-row gap-3 justify-content-start align-item-center">
                <i class="bi bi-box-arrow-up-right"></i>
                <a class="link-dark link-underline-opacity-0" target="_blank" href="tel:0442654884">04 42 65 48 84</a>
            </li>
        </ul>
    </div>
</footer>