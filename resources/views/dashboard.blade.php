<x-default-layout title="Dashboard" section_title="Dashboard">
    <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-4">
        <div class="px-6 py-4 bg-sky-50 border hover:border-l-4 border-sky-400 space-y-1.5 shadow duration-200">
            <div class="text-zinc-600 text-sm">Total Students</div>
            <div class="text-2xl font-bold">{{ $students->count() }}</div>
        </div>
        <div class="px-6 py-4 bg-green-50 border hover:border-l-4 border-green-400 space-y-1.5 shadow duration-200">
            <div class="text-zinc-600 text-sm">Total Majors</div>
            <div class="text-2xl font-bold">{{ $majors->count() }}</div>
        </div>
    </div>

    <div class="grid grid-cols-3 gap-4">
        <div class="col-span-3 sm:col-span-2 overflow-x-auto">
            <table class="min-w-full bg-white shadow">
                <thead>
                    <tr class="border-b border-zinc-200 text-sm leading-normal">
                        <th class="py-3 px-6 text-left">#</th>
                        <th class="py-3 px-6 text-left">Students</th>
                        <th class="py-3 px-6 text-center">Majors</th>
                    </tr>
                </thead>
                <tbody class="text-zinc-700 text-sm font-light">
                @forelse ($students as $student)
                <tr class="border-b border-zinc-200 hover:bg-zinc-100">
                    <td class="py-3 px-6 text-left">{{ $loop->iteration }}</td>
                    <td class="py-3 px-6 text-left">{{ $student->name }}</td>
                    <td class="py-3 px-6 text-center">{{ $student->majors->name }}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" class="text-center py-4 text-zinc-500">No students found.</td>
                </tr>
            @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-default-layout>