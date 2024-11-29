<footer class="bg-white dark:bg-dark dark:border-gray/20 border-2 border-lightgray/10 p-5 rounded-lg flex flex-wrap justify-center gap-3 sm:justify-between items-center">
    <div>
    <p class="font-semibold">
        &copy;
        <script>
            var year = new Date(); document.write(year.getFullYear());
        </script>
        JustAnotherLinkCut.com
    </p>
    </div>
    <div>
        <script type="text/javascript" src="https://cdnjs.buymeacoffee.com/1.0.0/button.prod.min.js" data-name="bmc-button" data-slug="juanespinola" data-color="#FFDD00" data-emoji="🍺"  data-font="Cookie" data-text="Buy me a beer" data-outline-color="#000000" data-font-color="#000000" data-coffee-color="#ffffff" ></script>
    </div>
    <ul class="sm:flex items-center text-dark dark:text-white gap-4 sm:gap-[30px] font-semibold hidden">
        <li><a href="{{ route('terms_of_use') }}" target="_blank" class="hover:text-primary transition-all duration-300 cursor-pointer">{{ __('messages.term_of_use') }}</a></li>
        <li><a href="{{ route('privacy_policy') }}" target="_blank" class="hover:text-primary transition-all duration-300 cursor-pointer">{{ __('messages.privacy_policy') }}</a></li>
        <li><a href="{{ route('faq') }}" target="_blank" class="hover:text-primary transition-all duration-300 cursor-pointer">{{ __('messages.faq') }}</a></li>
    </ul>
</footer>
