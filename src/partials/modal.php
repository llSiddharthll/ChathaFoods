 <!-- Modal -->
    <div id="foodModal" class="fixed inset-0 z-50 bg-black bg-opacity-50 hidden items-center justify-center">
        <div class="bg-white w-[90vw] md:w-[80vw] h-auto max-h-[90vh] rounded-3xl overflow-hidden flex flex-col md:flex-row shadow-xl relative">
            <span onclick="closeModal()" class="absolute top-4 right-6 text-3xl text-red-500 cursor-pointer">
                <i class="fa-solid fa-xmark"></i>
            </span>

            <div class="md:w-1/2">
                <img id="modal-image" class="h-full w-full object-cover" src="" alt="Food Image">
            </div>

            <div style="width: 50%; padding: 2rem; display: flex; flex-direction: column; gap: 1rem; overflow-y: auto;">
                <h3 id="modal-title" style="color: #ef4444; font-size: 2.5rem; font-weight: 600;"></h3>
                <p id="modal-intro" style="color: #374151; font-size: 1.5rem; line-height: 1.5;"></p>
                <ul id="modal-points" style="font-size: 1.3rem; color: #4b5563;"></ul>
            </div>
        </div>
    </div>