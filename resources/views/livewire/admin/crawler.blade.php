<div>
    <div class="panel panel-default">
        <div class="panel-heading m-3"> استخراج اطلاعات</div>
        <div class="panel-body">
            <p>
                برای استخراج و بروز رسانی اطلاعات دکمه زیر را بزنید..
            </p>
            <a  wire:click="runCrawler" wire:loading.attr="disabled" class="btn btn-success">
        <span wire:loading.remove wire:target="runCrawler">
              کرول نوبت دات ای ار
        </span>
                <span wire:loading wire:target="runCrawler">
             لطفا منتظر باشید...
        </span>

            </a>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading m-3">تولید مقاله</div>
        <div class="panel-body">
            <p>
                برای تولید مقالات دکتر تو و بروزرسانی اطلاعات دکمه زیر را بزنید..
            </p>
            <a  wire:click="doctorCrawler" wire:loading.attr="disabled" class="btn btn-success">
        <span wire:loading.remove wire:target="doctorCrawler">
              کرول doctoreto
        </span>
                <span wire:loading wire:target="doctorCrawler">
             لطفا منتظر باشید...
        </span>

            </a>
        </div>
    </div>
</div>
