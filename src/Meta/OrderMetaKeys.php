<?php
/**
 * Order meta keys used for e-Financials sync state.
 *
 * @package Arbictus\EFinancialsPlugin
 */

declare(strict_types=1);

namespace Aanndryyyy\EFinancialsPlugin\Meta;

/**
 * Canonical order meta keys from the accounting workflow plan.
 */
final class OrderMetaKeys {

	public const CLIENTS_ID = '_arbictus_efin_clients_id';

	public const SALE_INVOICE_ID = '_arbictus_efin_sale_invoice_id';

	public const SALE_INVOICE_NUMBER = '_arbictus_efin_sale_invoice_number';

	public const PAYMENT_MODE = '_arbictus_efin_payment_mode';

	public const TRANSACTION_ID = '_arbictus_efin_transaction_id';

	public const DELIVERED_AT = '_arbictus_efin_delivered_at';

	public const SYNCED_AT = '_arbictus_efin_synced_at';

	public const LAST_ERROR = '_arbictus_efin_last_error';

	public const CREDIT_SALE_INVOICE_ID = '_arbictus_efin_credit_sale_invoice_id';

	public const ATTEMPTS = '_arbictus_efin_attempts';

	public const NEXT_ATTEMPT_AT = '_arbictus_efin_next_attempt_at';

	/**
	 * Set only when the whole pipeline (invoice + payment + delivery) succeeded.
	 */
	public const SYNC_COMPLETE = '_arbictus_efin_sync_complete';

	/**
	 * Per-refund credit invoice meta key.
	 *
	 * @param int $refund_id WooCommerce refund ID.
	 */
	public static function refund_credit_id( int $refund_id ): string {

		return '_arbictus_efin_refund_' . $refund_id . '_credit_id';
	}
}
