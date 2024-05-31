<x-admin-layout>
    <div class="w-full py-2">
        <div>
            <div class="text-gray-900">
                <div class="w-full flex justify-between py-4 border-b-2">
                    <div class="px-4">
                        <p class="text-3xl font-bold">List All Locations KP Data</p>
                    </div>
                </div>
                <div class="w-fulloverflow-x-auto">
                    <table class="min-w-full divide-y-2 divide-gray-200 bg-white text-sm">
                        <thead class="ltr:text-left rtl:text-right">
                            <tr>
                                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Student Name</th>
                                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Location Name</th>
                                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Proof</th>
                                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Location Reason</th>
                                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Date</th>
                                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Status</th>
                                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Action</th>
                            </tr>
                        </thead>

                        <tbody class="divide-y divide-gray-200">
                            @foreach ($locations as $location)
                                <tr class="text-center">
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                                        {{ $location->user->name }}</td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                                        {{ $location->locationName }}</td>
                                    <td
                                        class="whitespace-nowrap px-4 py-2 text-gray-700 flex justify-center items-center">
                                        <img src="{{ asset('uploads/kpslocation/' . $location->locationProof) }}"
                                            alt="Proof Image" class="w-20 h-20">
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                                        {{ $location->locationReason }}</td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                                        {{ $location->created_at }}</td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                                        {{ $location->locationStatus }}</td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                                        <div>
                                            <form id="approval-form-{{ $location->locationId }}"
                                                action="{{ route('admin.location.approval', ['location' => $location->locationId]) }}"
                                                method="POST">
                                                @method('PUT')
                                                @csrf
                                                <button type="button"
                                                    onclick="confirmApproval({{ $location->locationId }})"
                                                    class="inline-block rounded border border-indigo-600 bg-indigo-600 px-3 py-2 text-sm font-medium text-white hover:bg-transparent hover:text-indigo-600 focus:outline-none focus:ring active:text-indigo-500">
                                                    Approve
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
<script>
    function confirmApproval(locationId) {
        if (confirm("Are you sure you want to approve this location kp?")) {
            document.getElementById('approval-form-' + locationId).submit();
        }
    }
</script>
