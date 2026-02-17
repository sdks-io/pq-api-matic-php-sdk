
# User Result

## Structure

`UserResult`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `token` | `?string` | Optional | [Token](#/rest/models/structures/token) representing the resource | getToken(): ?string | setToken(?string token): void |
| `addressLine1` | `?string` | Optional | Address Line 1<br><br>**Constraints**: *Maximum Length*: `255` | getAddressLine1(): ?string | setAddressLine1(?string addressLine1): void |
| `addressLine2` | `?string` | Optional | **Constraints**: *Maximum Length*: `255` | getAddressLine2(): ?string | setAddressLine2(?string addressLine2): void |
| `addressLine3` | `?string` | Optional | **Constraints**: *Maximum Length*: `255` | getAddressLine3(): ?string | setAddressLine3(?string addressLine3): void |
| `businessAddressLine1` | `?string` | Optional | Business address line 1<br><br>**Constraints**: *Maximum Length*: `255` | getBusinessAddressLine1(): ?string | setBusinessAddressLine1(?string businessAddressLine1): void |
| `businessAddressLine2` | `?string` | Optional | Business address line 2<br><br>**Constraints**: *Maximum Length*: `255` | getBusinessAddressLine2(): ?string | setBusinessAddressLine2(?string businessAddressLine2): void |
| `businessAddressLine3` | `?string` | Optional | Business address line 3<br><br>**Constraints**: *Maximum Length*: `255` | getBusinessAddressLine3(): ?string | setBusinessAddressLine3(?string businessAddressLine3): void |
| `businessAddressType` | [`?string(Addresses)`](../../doc/models/addresses.md) | Optional | Classifies the [address](#/rest/models/structures/address) type (*Residential*, *Business*, *Billing*, *Shipping*) | getBusinessAddressType(): ?string | setBusinessAddressType(?string businessAddressType): void |
| `businessCity` | `?string` | Optional | Business city<br><br>**Constraints**: *Maximum Length*: `50` | getBusinessCity(): ?string | setBusinessCity(?string businessCity): void |
| `businessContactRole` | [`?string(BusinessContactRoles)`](../../doc/models/business-contact-roles.md) | Optional | Business contact role<br><br>**Constraints**: *Maximum Length*: `20` | getBusinessContactRole(): ?string | setBusinessContactRole(?string businessContactRole): void |
| `businessCountry` | [`?string(Countries)`](../../doc/models/countries.md) | Optional | Throughout the PayQuicker API, the usage of the 2-letter alpha code is used in place of the country name, e.g., for bank country or residential country.<br><br>The 2-letter codes adhere to the ISO 3166-1 spec and are listed here for convenience. | getBusinessCountry(): ?string | setBusinessCountry(?string businessCountry): void |
| `businessName` | `?string` | Optional | Business name | getBusinessName(): ?string | setBusinessName(?string businessName): void |
| `businessPostalCode` | `?string` | Optional | **Constraints**: *Minimum Length*: `3`, *Maximum Length*: `50` | getBusinessPostalCode(): ?string | setBusinessPostalCode(?string businessPostalCode): void |
| `businessRegion` | `?string` | Optional | Region that the business is based out of | getBusinessRegion(): ?string | setBusinessRegion(?string businessRegion): void |
| `city` | `?string` | Optional | **Constraints**: *Maximum Length*: `50` | getCity(): ?string | setCity(?string city): void |
| `country` | [`?string(Countries)`](../../doc/models/countries.md) | Optional | Throughout the PayQuicker API, the usage of the 2-letter alpha code is used in place of the country name, e.g., for bank country or residential country.<br><br>The 2-letter codes adhere to the ISO 3166-1 spec and are listed here for convenience. | getCountry(): ?string | setCountry(?string country): void |
| `countryOfBirth` | [`?string(Countries)`](../../doc/models/countries.md) | Optional | Throughout the PayQuicker API, the usage of the 2-letter alpha code is used in place of the country name, e.g., for bank country or residential country.<br><br>The 2-letter codes adhere to the ISO 3166-1 spec and are listed here for convenience. | getCountryOfBirth(): ?string | setCountryOfBirth(?string countryOfBirth): void |
| `countryOfNationality` | [`?string(Countries)`](../../doc/models/countries.md) | Optional | Throughout the PayQuicker API, the usage of the 2-letter alpha code is used in place of the country name, e.g., for bank country or residential country.<br><br>The 2-letter codes adhere to the ISO 3166-1 spec and are listed here for convenience. | getCountryOfNationality(): ?string | setCountryOfNationality(?string countryOfNationality): void |
| `createdOn` | `?DateTime` | Optional | Time object was [created](#/rest/models/structures/created-on) | getCreatedOn(): ?\DateTime | setCreatedOn(?\DateTime createdOn): void |
| `currency` | [`?string(Currencies)`](../../doc/models/currencies.md) | Optional | [Currency code type](#/rest/models/structures/country) for the object<br><br>**Default**: `Currencies::USD` | getCurrency(): ?string | setCurrency(?string currency): void |
| `dateOfBirth` | `?DateTime` | Optional | - | getDateOfBirth(): ?\DateTime | setDateOfBirth(?\DateTime dateOfBirth): void |
| `email` | `?string` | Optional | Contact [email address](#/rest/models/structures/email-address) for the user account for the user account<br><br>**Constraints**: *Minimum Length*: `8`, *Maximum Length*: `100`, *Pattern*: `^.+@.+\..+` | getEmail(): ?string | setEmail(?string email): void |
| `employerId` | `?string` | Optional | Employer id | getEmployerId(): ?string | setEmployerId(?string employerId): void |
| `firstName` | `?string` | Optional | First name<br><br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `100` | getFirstName(): ?string | setFirstName(?string firstName): void |
| `gender` | [`?string(Genders)`](../../doc/models/genders.md) | Optional | [Gender](#/rest/models/structures/gender) as a user identifies | getGender(): ?string | setGender(?string gender): void |
| `governmentId` | `?string` | Optional | **Constraints**: *Maximum Length*: `20` | getGovernmentId(): ?string | setGovernmentId(?string governmentId): void |
| `governmentIdType` | [`?string(GovernmentIds)`](../../doc/models/government-ids.md) | Optional | Indicates the type of ID submitted for user verification purposes. | getGovernmentIdType(): ?string | setGovernmentIdType(?string governmentIdType): void |
| `language` | [`?string(Languages)`](../../doc/models/languages.md) | Optional | The [Language](#/rest/models/structures/language) type in IETF's BCP 47 format | getLanguage(): ?string | setLanguage(?string language): void |
| `lastName` | `?string` | Optional | Last name<br><br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `100` | getLastName(): ?string | setLastName(?string lastName): void |
| `mailingAddressLine1` | `?string` | Optional | **Constraints**: *Maximum Length*: `255` | getMailingAddressLine1(): ?string | setMailingAddressLine1(?string mailingAddressLine1): void |
| `mailingAddressLine2` | `?string` | Optional | **Constraints**: *Maximum Length*: `255` | getMailingAddressLine2(): ?string | setMailingAddressLine2(?string mailingAddressLine2): void |
| `mailingAddressLine3` | `?string` | Optional | **Constraints**: *Maximum Length*: `255` | getMailingAddressLine3(): ?string | setMailingAddressLine3(?string mailingAddressLine3): void |
| `mailingCity` | `?string` | Optional | **Constraints**: *Maximum Length*: `50` | getMailingCity(): ?string | setMailingCity(?string mailingCity): void |
| `mailingCountry` | [`?string(Countries)`](../../doc/models/countries.md) | Optional | Throughout the PayQuicker API, the usage of the 2-letter alpha code is used in place of the country name, e.g., for bank country or residential country.<br><br>The 2-letter codes adhere to the ISO 3166-1 spec and are listed here for convenience. | getMailingCountry(): ?string | setMailingCountry(?string mailingCountry): void |
| `mailingPostalCode` | `?string` | Optional | **Constraints**: *Minimum Length*: `3` | getMailingPostalCode(): ?string | setMailingPostalCode(?string mailingPostalCode): void |
| `mailingRegion` | `?string` | Optional | **Constraints**: *Maximum Length*: `50` | getMailingRegion(): ?string | setMailingRegion(?string mailingRegion): void |
| `mobileNumber` | `?string` | Optional | - | getMobileNumber(): ?string | setMobileNumber(?string mobileNumber): void |
| `mobileNumberCountry` | [`?string(Countries)`](../../doc/models/countries.md) | Optional | Throughout the PayQuicker API, the usage of the 2-letter alpha code is used in place of the country name, e.g., for bank country or residential country.<br><br>The 2-letter codes adhere to the ISO 3166-1 spec and are listed here for convenience. | getMobileNumberCountry(): ?string | setMobileNumberCountry(?string mobileNumberCountry): void |
| `occupationTitle` | `?string` | Optional | **Constraints**: *Maximum Length*: `20` | getOccupationTitle(): ?string | setOccupationTitle(?string occupationTitle): void |
| `occupationType` | [`?string(Occupations)`](../../doc/models/occupations.md) | Optional | [Type of occupation](#/rest/models/structures/occupation) for the user | getOccupationType(): ?string | setOccupationType(?string occupationType): void |
| `phoneNumber` | `?string` | Optional | - | getPhoneNumber(): ?string | setPhoneNumber(?string phoneNumber): void |
| `phoneNumberCountry` | [`?string(Countries)`](../../doc/models/countries.md) | Optional | Throughout the PayQuicker API, the usage of the 2-letter alpha code is used in place of the country name, e.g., for bank country or residential country.<br><br>The 2-letter codes adhere to the ISO 3166-1 spec and are listed here for convenience. | getPhoneNumberCountry(): ?string | setPhoneNumberCountry(?string phoneNumberCountry): void |
| `postalCode` | `?string` | Optional | **Constraints**: *Minimum Length*: `3`, *Maximum Length*: `50` | getPostalCode(): ?string | setPostalCode(?string postalCode): void |
| `programUserId` | `?string` | Optional | [Program identifier](#/rest/models/structures/program-user-id) for the user<br><br>**Constraints**: *Minimum Length*: `5`, *Maximum Length*: `100` | getProgramUserId(): ?string | setProgramUserId(?string programUserId): void |
| `region` | `?string` | Optional | **Constraints**: *Maximum Length*: `50` | getRegion(): ?string | setRegion(?string region): void |
| `status` | [`?string(UserStatuses)`](../../doc/models/user-statuses.md) | Optional | Status of the user [User status type](#/rest/models/structures/user-status) | getStatus(): ?string | setStatus(?string status): void |
| `taxResidentStatus` | [`?string(TaxResidentStatuses)`](../../doc/models/tax-resident-statuses.md) | Optional | Tax [resident status type](#/rest/models/structures/tax-resident-status) | getTaxResidentStatus(): ?string | setTaxResidentStatus(?string taxResidentStatus): void |
| `userType` | [`?string(UserTypes)`](../../doc/models/user-types.md) | Optional | Account holder's profile [type](#/rest/models/structures/user-type) | getUserType(): ?string | setUserType(?string userType): void |
| `links` | [`?(HateoasSelfRef[])`](../../doc/models/hateoas-self-ref.md) | Optional | **Constraints**: *Minimum Items*: `1`, *Maximum Items*: `10`, *Unique Items Required* | getLinks(): ?array | setLinks(?array links): void |
| `meta` | [`?MetadataItems`](../../doc/models/metadata-items.md) | Optional | - | getMeta(): ?MetadataItems | setMeta(?MetadataItems meta): void |

## Example (as JSON)

```json
{
  "token": "string",
  "addressLine1": "string",
  "addressLine2": "string",
  "addressLine3": "string",
  "businessAddressLine1": "string",
  "businessAddressLine2": "string",
  "businessAddressLine3": "string",
  "businessAddressType": "BUSINESS",
  "businessCity": "string",
  "businessContactRole": "MANAGER",
  "businesscountry": "US",
  "businessName": "string",
  "businessPostalCode": "uuk",
  "businessRegion": "string",
  "city": "string",
  "country": "US",
  "countryOfBirth": "US",
  "countryOfNationality": "US",
  "createdOn": "2026-02-07T22:23:09.9667010Z",
  "currency": "USD",
  "dateOfBirth": "2026-02-07T22:23:10.0141433Z",
  "email": "john.doe@email.com",
  "employerId": "string",
  "firstName": "John",
  "gender": "FEMALE",
  "governmentId": "string",
  "governmentIdType": "CURP",
  "language": "en-US",
  "lastName": "Doe",
  "mailingAddressLine1": "string",
  "mailingAddressLine2": "string",
  "mailingAddressLine3": "string",
  "mailingCity": "string",
  "mailingcountry": "US",
  "mailingPostalCode": "jgl",
  "mailingRegion": "string",
  "mobileNumber": "+12345678901",
  "mobileNumberCountry": "US",
  "occupationTitle": "string",
  "occupationType": "ARTS",
  "phoneNumber": "+12345678901",
  "phoneNumberCountry": "US",
  "postalCode": "uuk",
  "programUserId": "pdekt",
  "region": "string",
  "status": "ACTIVE",
  "taxResidentStatus": "NO",
  "userType": "BUSINESS",
  "links": [
    {
      "href": "string",
      "params": {
        "rel": "self"
      }
    }
  ],
  "meta": {
    "timezone": "GMT",
    "requestRef": "20260207T231757Z-r1d65bb46d495mgjhC1BL1qvx400000004rg00000000c2uh"
  }
}
```

