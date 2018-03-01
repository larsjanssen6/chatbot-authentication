@section('content')
    <div class="flex flex-col xs:w-5/6 sm:w-4/5 md:w-1/2 h-128 text-center mx-auto border-grey-lightest border-4 shadow-md">
        <div class="flex align-items-start border-b-4 border-grey-lightest items-center bg-grey-lightest">
            <div class="flex py-2">
                <div class="circle bg-red ml-2"></div>
                <div class="circle bg-yellow ml-2"></div>
                <div class="circle bg-green ml-2"></div>
            </div>
        </div>

        <div class="flex overflow-auto" style="flex:3;">
            <div class="flex flex-col w-full p-4">
                <div class="flex">
                    <div class="flex p-4 message md:w-2/5 mb-2 text-left">
                        Hallo!
                    </div>
                </div>

                <div class="flex">
                    <div class="flex p-4 message md:w-2/5 mb-2 align-items-start text-left">
                        Mag ik uw PCN nummer?
                    </div>
                </div>

                <div class="flex justify-end">
                    <div class="flex p-4 message md:w-2/5 mb-2 text-left">
                        Natuurlijk, dat is 923934
                    </div>
                </div>

                <div class="flex">
                    <div class="flex p-4 message md:w-2/5 mb-2 text-left">
                        Bedankt, en uw wachtwoord?
                    </div>
                </div>

                <div class="flex justify-end">
                    <div class="flex p-4 message md:w-2/5 mb-2 text-left">
                        **********
                    </div>
                </div>

                <div class="flex">
                    <div class="flex p-4 message md:w-2/5 mb-2 text-left">
                        Hallo Lars u bent nu ingelogd. Waarmee kan ik u helpen?
                    </div>
                </div>
            </div>
        </div>

        <input class="border-t-4 border-grey-lightest py-3">
    </div>
@endsection