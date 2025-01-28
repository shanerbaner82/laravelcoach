<div class="max-w-2xl mx-auto  px-4">
    <div class="typewriter mt-10">
        <h1 class="text-3xl font-black text-white py-6 text-center mt-10">Laravel Coaching</h1>
    </div>

    <div class="bg-slate-900/20 border-y border-yellow-500 p-4  shadow-xl rounded-tl-3xl rounded-br-3xl mb-20 mt-10">
        <div class="text-white">
            <p class="text-lg font-medium mb-10">
                Are you a junior developer eager to level up your skills in Laravel?
                <br/>
                <br/>
                This is your opportunity to work through code, ask questions, and get the guidance you need to improve. Together, we'll tackle projects, find better solutions, and share the journey on YouTube to help others grow too.
                <br/>
                <br/>
                Fill out the form below to share more about yourself and your goals. Let’s build something amazing
                together!
            </p>
        </div>
        <form wire:submit="create">
            {{ $this->form }}
            <div class="flex justify-end mt-4 ">
                <button
                    class="px-5 py-3 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-900 transition-all duration-1000">
                    Submit
                </button>
            </div>
        </form>
    </div>
</div>
