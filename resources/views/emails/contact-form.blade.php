{{--@formatter:off--}}
@component('mail::message')
# Contact Form Submission

Here are the details of the contact form submission:

- **First Name:** {{ $firstName }}
- **Last Name:** {{ $lastName }}
- **Company:** {{ $company ?: 'N/A' }}  <!-- Display 'N/A' if no company provided -->
- **Email Address:** {{ $email }}
- **Message:**
{{ $message }}

Thanks,
{{ config('app.name') }}
@endcomponent
