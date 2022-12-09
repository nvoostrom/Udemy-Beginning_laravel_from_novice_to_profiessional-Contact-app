<thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">First Name</th>
        <th scope="col">phone</th>
        <th scope="col">Email</th>
        <th scope="col">Company</th>
        <th scope="col">Actions</th>
    </tr>
</thead>
<tbody>
    @each('contact.components.loops.contactLoop', $contacts, 'contact', 'contact.components.alerts.empty')
</tbody>
