# IPv6-Subnetz

Bestellung: `POST /products/ipv6/order`. ID: `data.id`.

Kundenfelder: keine.

| Feld | Typ | Pflicht | Hinweis |
|---|---|---|---|
| `ip_pool_id` | string | Ja | ID of the IP pool to order from |
| `ripe_organisation_id` | string | Ja | RIPE organisation to assign this subnet to |
| `asns` | array | Nein | Initial ASNs to add (optional) |
| `country` | string | Nein | 2-letter country code (default: DE) |
| `ripe_abuse_contact_id` | string | Nein | Abuse contact (optional) |
| `ripe_contact_id` | string | Nein | Tech/admin contact (optional) |

API-Key-Rechte für alle Modulansichten und Aktionen: `ipv6:create`, `ipv6:delete`, `ipv6:read`, `ipv6:update`.

Verwaltungsaktionen: Geofeed ändern, Bezeichnung ändern.

Hinweise:
- RIPE org prerequisite; optional contacts,country,asns
- No suspend/unsuspend endpoint
