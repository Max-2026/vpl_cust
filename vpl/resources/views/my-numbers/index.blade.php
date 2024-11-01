@extends('master-layout')
@section('title', 'My Numbers')
@section('content')
<div class="w-full my-8 p-6 rounded-md shadow bg-white">
  <div>
    <h3 class="text-lg leading-6 font-medium text-gray-900 ml-1 mb-1.25">
      My Numbers
    </h3>
  </div>

  @if (count($history ?? []) > 0)
  <div class="mt-4 flex flex-col">
    <div class="-my-2 overflow-x-auto scroll-mx-8">
      <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
          <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
              <tr>
                @foreach([
                  'Number',
                  'Forwarded To',
                  '',
                  'Country',
                  'Number Status',
                  'Paid Till Date',
                  'Purchased Date',
                  'Monthly Charges',
                  'Annual Charges',
                  'Per Minute Charges',
                  'Per SMS Charges',
                  'TalkTime Remaining',
                  'SMS Remaining',
                  'Call Logs',
                  ''
                ] as $header)
                  <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap">
                    {{ $header }}
                  </th>
                @endforeach
              </tr>
            </thead>
            <tbody onclick="handleRowClick(event)" class="bg-white divide-y divide-gray-300">
              @foreach ($history as $row)

                @if ($row->activity == 'release_requested')
                  <tr class="bg-gray-200" title="This number will be released">
                    <td class="px-4 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $row->number->number }}</td>

                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">{{ $row->forwarding_url }}</td>

                    <td class="px-4 py-4 whitespace-nowrap text-right text-sm font-medium hover:cursor-pointer">
                      <a
                        data-btn-id="configure-btn"
                        data-number="{{ $row->number->number }}"
                        data-forwarding-url="{{ $row->forwarding_url }}"
                        class="bg-gray-400 text-white px-3 py-1 rounded hover:bg-gray-500"
                      >
                        Configure
                      </a>
                    </td>

                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">{{ ucfirst($row->number->country->name) }}</td>
                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">
                      @if ($row->number->is_active)
                        <span>Active</span>
                      @else
                        <span>Deactive</span>
                      @endif
                    </td>
                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">
                      @if ($row->billing_type == "prorated")
                        {{
                          Carbon\Carbon::parse($row->created_at)
                            ->format("Y-m-t");
                        }}
                      @else
                        {{
                          Carbon\Carbon::parse($row->created_at)->addMonth()
                            ->format("Y-m-d");
                        }}
                      @endif
                    </td>
                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">
                      {{
                        Carbon\Carbon::parse($row->created_at)->format("Y-m-d");
                      }}
                    </td>
                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">{{ $row->number->monthly_charges }}</td>
                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">{{ $row->number->annual_charges }}</td>
                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">{{ $row->number->per_minute_charges }}</td>
                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">{{ $row->number->per_sms_charges }}</td>
                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">{{ $row->number->talktime_quota }}</td>
                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">{{ $row->number->sms_quota }}</td>
                    <td class="px-4 py-4 whitespace-nowrap text-right text-sm font-medium">
                      <a href="{{ route('number-logs', ['number_id' => $row->number->id]) }}" class="bg-cyan-600 text-white px-3 py-1 rounded hover:bg-cyan-700">View</a>
                    </td>
                    <td class="px-4 py-4 whitespace-nowrap text-right text-sm font-medium">
                      <p class="bg-gray-500 text-white text-center px-3 py-1 rounded">Deactive</p>
                    </td>
                  </tr>
                @else
                  <tr>
                    <td class="px-4 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $row->number->number }}</td>

                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">{{ $row->forwarding_url }}</td>
                    <td class="px-4 py-4 whitespace-nowrap text-right text-sm font-medium hover:cursor-pointer">
                      <a
                        data-btn-id="configure-btn"
                        data-number="{{ $row->number->number }}"
                        data-forwarding-url="{{ $row->forwarding_url }}"
                        class="bg-gray-400 text-white px-3 py-1 rounded hover:bg-gray-500"
                      >
                      Configure
                      </a>
                    </td>

                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">{{ ucfirst($row->number->country->name) }}</td>
                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">
                      @if ($row->number->is_active)
                        <span>Active</span>
                      @else
                        <span>Deactive</span>
                      @endif
                    </td>
                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">
                      @if ($row->billing_type == "prorated")
                        {{
                          Carbon\Carbon::parse($row->created_at)->format("Y-m-t");
                        }}
                      @else
                        {{
                          Carbon\Carbon::parse($row->created_at)->addMonth()
                            ->format("Y-m-d");
                        }}
                      @endif
                    </td>
                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">
                      {{
                        Carbon\Carbon::parse($row->created_at)->format("Y-m-d");
                      }}
                    </td>
                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">{{ $row->number->monthly_charges }}</td>
                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">{{ $row->number->annual_charges }}</td>
                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">{{ $row->number->per_minute_charges }}</td>
                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">{{ $row->number->per_sms_charges }}</td>
                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">{{ $row->number->talktime_quota }}</td>
                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">{{ $row->number->sms_quota }}</td>
                    <td class="px-4 py-4 whitespace-nowrap text-right text-sm font-medium">
                      <a href="{{ url(route('number-logs', ['number_id' => $row->number->id])) }}" class="bg-cyan-600 text-white px-3 py-1 rounded hover:bg-cyan-700">View</a>
                    </td>
                    <td class="px-4 py-4 whitespace-nowrap text-right text-sm font-medium">
                      <a href="{{ url(route('release-number', ['number_id' => $row->number->id])) }}" class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700">Deactivate</a>
                    </td>
                  </tr>
                @endif
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  @else
  <h2 class="w-full text-center mt-4 text-xl">No Data</h2>
  @endif
</div>

<div id="configure-modal-wrapper" onclick="handleConfigureModalBlur(event)" class="fixed overflow-y-auto overflow-x-hidden sm:overflow-hidden z-10 inset-0 flex justify-center sm:items-center hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true">
  <div id="configure-modal-overlay" class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity duration-1000 ease-in bg-opacity-0" aria-hidden="true"></div>
  <div id="configure-modal" class="absolute my-8 bg-white transition ease-in rounded-md p-4 z-10 w-11/12 max-w-lg sm:max-w-2xl lg:max-w-3xl scale-0">
    <h2 id="payment-details-heading" class="w-full px-3 text-2xl my-2 leading-6 font-medium text-gray-900">Configure your number</h2>
    <div class="w-full mt-2 px-2">
      <div class="flex justify-between items-center mb-6">
        <h3 id="configure-number-placeholder" class="text-lg mt-2 ml-1 leading-6 font-medium text-gray-700 text-left">
          Update your number forwarding settings
        </h3>
      </div>

      <form onsubmit="handleConfigure(event)" class="w-full grid grid-cols-12 gap-4">
        <div class="col-span-12 sm:col-span-2">
          <label for="forwarding_type" class="block text-sm font-medium text-gray-700">Type</label>
          <div class="mt-1">
            <select onchange="handleTypeChange(event)" id="forwarding_type" name="forwarding_type" class="shadow-sm focus:ring-cyan-600 focus:border-cyan-600 block w-full sm:text-sm border-gray-300 rounded-md">
              <!-- <option value="pstn">PSTN</option> -->
              <option value="sip">SIP</option>
              <option selected value="portal">Portal</option>
            </select>
          </div>
        </div>
        <div class="col-span-12 sm:col-span-8">
          <label for="forwarding_url" class="block text-sm font-medium text-gray-700">
            Forwarding
          </label>
          <div class="mt-1 flex rounded-md shadow-sm">
            <span id="configure-number-placeholder-2" class="inline-flex items-center px-3 rounded-l-md border border-gray-300 bg-gray-50 text-gray-500 sm:text-sm">
            </span>
            <span class="inline-flex items-center px-3 border border-r-0 border-l-0 border-gray-300 bg-gray-50 text-gray-500 sm:text-sm">
              <svg class="w-5 h-5" data-slot="icon" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path clip-rule="evenodd" d="M3 10a.75.75 0 0 1 .75-.75h10.638L10.23 5.29a.75.75 0 1 1 1.04-1.08l5.5 5.25a.75.75 0 0 1 0 1.08l-5.5 5.25a.75.75 0 1 1-1.04-1.08l4.158-3.96H3.75A.75.75 0 0 1 3 10Z" fill-rule="evenodd"></path>
              </svg>
            </span>
            <input oninput="validateForwardingUrl(event)" type="text" name="forwarding_url" id="forwarding_url" autocomplete="forwarding_url" class="flex-1 focus:ring-0 focus:outline-none focus:border-gray-300 block w-full min-w-0 rounded-none rounded-r-md sm:text-sm border-gray-300 bg-gray-100 text-gray-700" disabled value="Receive calls on the portal">
          </div>
        </div>
        <div class="col-span-12 sm:col-span-2 flex items-end justify-end">
          <button id="configure-modal-btn" class="py-2 px-4 border border-transparent shadow-sm text-sm rounded-md text-white bg-cyan-600 hover:bg-cyan-700 focus:outline-none focus:ring-0">Update</button>
          <button id="configure-modal-spinner" class="hidden py-1.5 px-4 border border-transparent shadow-sm text-sm rounded-md text-white bg-cyan-600 hover:bg-cyan-700 focus:outline-none focus:ring-0"><svg class="text-white w-6 h-6 animate-spin" data-slot="icon" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path clip-rule="evenodd" d="M4.755 10.059a7.5 7.5 0 0 1 12.548-3.364l1.903 1.903h-3.183a.75.75 0 1 0 0 1.5h4.992a.75.75 0 0 0 .75-.75V4.356a.75.75 0 0 0-1.5 0v3.18l-1.9-1.9A9 9 0 0 0 3.306 9.67a.75.75 0 1 0 1.45.388Zm15.408 3.352a.75.75 0 0 0-.919.53 7.5 7.5 0 0 1-12.548 3.364l-1.902-1.903h3.183a.75.75 0 0 0 0-1.5H2.984a.75.75 0 0 0-.75.75v4.992a.75.75 0 0 0 1.5 0v-3.18l1.9 1.9a9 9 0 0 0 15.059-4.035.75.75 0 0 0-.53-.918Z" fill-rule="evenodd"></path>
          </svg></button>
        </div>
      </form>
    </div>
  </div>
</div>

<div id="toast" class="hidden">
  <span id="toast-message">Success message</span>
</div>

@includeWhen(
  $history->count() > 0,
  'table-pagination-bar',
  ['rows' => $history]
)

@endsection

@section('scripts')

<script>

  function showToast(message, type = 'success') {
    const toast = document.getElementById('toast');
    const toastMessage = document.getElementById('toast-message');

    toastMessage.textContent = message;

    toast.className = `fixed hidden scale-0 transition bottom-6 right-6 py-4 px-8 rounded shadow-md text-white font-semibold z-50 ${type === 'success' ? 'bg-green-600' : 'bg-red-600'}`;


    setTimeout(() => {
      toast.classList.remove('hidden');

      setTimeout(() => {
        toast.classList.remove('scale-0');
        toast.classList.add('scale-100');
      }, 10);
    }, 10);

    setTimeout(() => {
      toast.classList.remove('scale-100');
      toast.classList.add('scale-0');

      setTimeout(() => {
        toast.classList.add('hidden');
      }, 250);
    }, 3000);
  }

  function handleConfigureModalBlur(event) {
    const modal = document.getElementById('configure-modal');
    const isModalClicked = Boolean(event.composedPath().filter(
      (elem) => elem.id == 'configure-modal'
    ).length);

    if (!isModalClicked && !modal.classList.contains('scale-0')) {
      hideConfigureModal();
    }
  }

  function showConfigureModal(number) {
    const modalWrapper = document.getElementById('configure-modal-wrapper');
    const modalOverlay = document.getElementById('configure-modal-overlay');
    const modal = document.getElementById('configure-modal');
    const placeholder2 = document.getElementById(
      'configure-number-placeholder-2'
    );
    placeholder2.innerText = number;

    modalWrapper.classList.remove('hidden');
    setTimeout(() => {
      modal.classList.remove('scale-0');
      modalOverlay.classList.remove('bg-opacity-0');
    }, 100);
  }

  function hideConfigureModal() {
    const modalWrapper = document.getElementById('configure-modal-wrapper');
    const modalOverlay = document.getElementById('configure-modal-overlay');
    const modal = document.getElementById('configure-modal');

    modal.classList.add('scale-0');
    modalOverlay.classList.add('bg-opacity-0');
    setTimeout(() => {
      modalWrapper.classList.add('hidden');
    }, 200);
  }

  function handleRowClick(event) {
    const row = event.target.closest('tr');

    if (
      event.target.tagName == 'A'
      && event.target.dataset.btnId == 'configure-btn'
    ) {
      const number = event.target.dataset.number;
      showConfigureModal(number);
    }
  }

  async function handleConfigure(event) {
    event.preventDefault();
    const form = event.target;
    const forwardingType = form.elements['forwarding_type'].value;
    const forwardingUrl = form.elements['forwarding_url'].value;
    const number = document.getElementById('configure-number-placeholder-2')
      .innerText;

    if (!forwardingUrl) return alert('Please fill the forwarding field');

    const btn = document.getElementById('configure-modal-btn');
    const spinner = document.getElementById('configure-modal-spinner');

    try {
      btn.classList.add('hidden');
      spinner.classList.remove('hidden');

      const payload = new FormData();
      payload.append('number', number);
      payload.append('forwarding_type', forwardingType);
      payload.append('forwarding_url', forwardingUrl);

      const res = await configureRequest(payload);

      if (res.status === 200) {
        btn.classList.remove('hidden');
        spinner.classList.add('hidden');
        hideConfigureModal();

        showToast('Configuration successfully changed!', 'success');
        setTimeout(() => window.location.reload(), 1500);
      } else {
        btn.classList.remove('hidden');
        spinner.classList.add('hidden');

        showToast('Operation failed!', 'error');
      }
    } catch (error) {
      console.log(error);
      btn.classList.remove('hidden');
      spinner.classList.add('hidden');

      showToast('Operation failed!', 'error');
    }
  }

  async function configureRequest(formData) {
    formData.append('_token', "{{ csrf_token() }}");
    const req = await fetch("{{ url(route('change-forwarding')) }}", {
      method: 'POST',
      body: formData
    });

    return req;
  }

  function validateForwardingUrl({ target: { value } }) {
    if (!isValidSIPUrl(value)) {
      const field = document.getElementById('forwarding_url');
      field.classList.add('border-red-600', 'focus:border-red-600');
    } else {
      const field = document.getElementById('forwarding_url');
      field.classList.remove('border-red-600', 'focus:border-red-600');
    }
  }

  function isValidSIPUrl(url) {
    const sipRegex = /^[a-zA-Z0-9._%+-]+@[0-9]{1,3}(\.[0-9]{1,3}){3}(:[0-9]{4,5})?$/;

    return sipRegex.test(url);
  }

  function handleTypeChange({ target: { value } })
  {
    const field = document.querySelector("[name='forwarding_url']");

    if (value == 'portal') {
      field.classList.add('bg-gray-100', 'text-gray-700');
      field.setAttribute('disabled', true);
      field.value = 'Receive calls on the portal';
    } else {
      field.classList.remove('bg-gray-100', 'text-gray-700');
      field.removeAttribute('disabled');
      field.value = '';
    }
  }

</script>

@endsection
