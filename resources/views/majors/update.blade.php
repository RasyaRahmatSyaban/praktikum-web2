<x-default-layout title="Major" section_title="Edit Major Data">
    <div class="grid grid-cols-1">
        <form action="{{ route('majors.update', $major->id) }}" method="POST"
            class="flex flex-col gap-4 px-6 py-4 bg-white border border-zinc-300 shadow col-span-1">
            @csrf
            @method("PUT")

            <div class="flex flex-col gap-2">
                <label for="name">Major Name</label>
                <input type="text" id="name" name="name"
                    class="px-3 py-2 border border-zinc-300 bg-slate-50"
                    value="{{old('name', $major->name)}}"
                    placeholder="e.g., Teknik Informatika" />
            </div>

            <div class="flex flex-col gap-2">
                <label for="code">Major Code</label>
                <input type="text" id="code" name="code"
                    class="px-3 py-2 border border-zinc-300 bg-slate-50"
                    value="{{old('code', $major->code)}}"
                    placeholder="e.g., TIF" />
            </div>

            <div class="flex flex-col gap-2">
                <label for="description">Description</label>
                <textarea id="description" name="description"
                    class="px-3 py-2 border border-zinc-300 bg-slate-50"
                    rows="3"
                    placeholder="Write a brief description...">{{old('description', $major->description)}}</textarea>
            </div>

            <div class="self-end flex gap-2 mt-4">
                <a href="{{ route('majors.index') }}"
                    class="bg-slate-50 border border-slate-500 text-slate-500 px-3 py-2 cursor-pointer">
                    <span>Cancel</span>
                </a>
                <button type="submit"
                    class="bg-blue-50 border border-blue-500 text-blue-500 px-3 py-2 flex items-center gap-2 cursor-pointer">
                    <i class="ph ph-floppy-disk block text-blue-500"></i>
                    <span>Update</span>
                </button>
            </div>
        </form>
    </div>
</x-default-layout>
