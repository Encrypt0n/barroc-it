
<h1>{{ $quotation->companyname   }}</h1>
<p>{{ $quotation->contactpersonname    }}</p>
<p>{{ $quotation->contactpersonemail    }}</p>
<p>{{ $quotation->contactpersonphone    }}</p>
<p>{{ $quotation->companyaddress    }}</p>
<p>{{ $quotation->italian_light    }}</p>
<p>{{ $quotation->italian    }}</p>
<p>{{ $quotation->italian_deluxe    }}</p>
<p>{{ $quotation->italian_deluxe_special    }}</p>
<p>{{ $quotation->espresso_beneficio    }}</p>
<p>{{ $quotation->yellow_bourbon_brasil    }}</p>
<p>{{ $quotation->espresso_roma    }}</p>
<p>{{ $quotation->red_honey_honduras    }}</p>

<form action="{{ route('quotationreview.store', $quotation->id)  }}" method="post">

    @csrf
    <input type="submit" value="Yes" class="btn btn-info">
    <input type="hidden" name="quotation_id" value="{{ $quotation->id  }}">


</form>
